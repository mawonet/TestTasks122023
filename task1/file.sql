ALTER TABLE `phone_numbers`
    ADD CONSTRAINT FOREIGN KEY `fk_user_id` (`user_id`)
    REFERENCES `users` (`id`)
    ON DELETE CASCADE;


SELECT u.name, (
    SELECT COUNT(*)
    FROM phone_numbers pn
    WHERE pn.user_id = u.id ) AS count
FROM users u
WHERE FROM_UNIXTIME(u.birth_date)
    BETWEEN DATE_SUB(CURDATE(), INTERVAL 22 YEAR) AND DATE_SUB(CURDATE(), INTERVAL 18 YEAR)