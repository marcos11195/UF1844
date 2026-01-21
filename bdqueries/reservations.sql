CREATE TABLE reservations (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id INT UNSIGNED NOT NULL,
    table_id INT UNSIGNED NOT NULL,
    time_slot_id INT UNSIGNED NOT NULL,
    date DATE NOT NULL,
    created DATETIME DEFAULT CURRENT_TIMESTAMP,
    modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    CONSTRAINT fk_res_user
        FOREIGN KEY (user_id) REFERENCES users(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_res_table
        FOREIGN KEY (table_id) REFERENCES tables(id)
        ON DELETE CASCADE,

    CONSTRAINT fk_res_timeslot
        FOREIGN KEY (time_slot_id) REFERENCES time_slots(id)
        ON DELETE CASCADE,

   
    CONSTRAINT unique_reservation UNIQUE (table_id, date, time_slot_id)
) ENGINE=InnoDB;
