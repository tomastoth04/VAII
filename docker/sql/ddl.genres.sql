CREATE TABLE `genres` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `description` TEXT,
    `added_at` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `genres` (`name`, `description`, `added_at`) VALUES
('Action', 'Games that emphasize physical challenges, including hand-eye coordination and reaction-time.', '2026-11-14'),
('Adventure', 'Games that focus on story-driven experiences, exploration, and puzzle-solving.', '2026-11-14'),
('RPG', 'Games where players assume the roles of characters in a fictional setting.', '2026-11-14'),
('Simulation', 'Games that simulate real-world activities or systems.', '2026-11-14'),
('Strategy', 'Games that emphasize skillful thinking and planning to achieve victory.', '2026-11-14'),
('Sports', 'Games that simulate the practice of sports.', '2026-11-14'),
('Racing', 'Games that involve competing in races with vehicles or characters.', '2026-11-14'),
('Survival', 'Games that focus on close combat between a limited number of characters.', '2026-11-14'),
('Roguelike', 'Games that feature random generation of levels or environments, and often include permadeath.', '2026-11-14'),
('FPS', 'Games that involve shooting enemies or targets, often from a first-person or third-person perspective.', '2026-11-14'),
('Horror', 'Games that aim to create a frightening or unsettling experience for the player.', '2026-11-14');

CREATE TABLE `game_genres` (
                               `game_id` INT NOT NULL,
                               `genre_id` INT NOT NULL,
                               `added_at` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
                               PRIMARY KEY (`game_id`, `genre_id`),
                               FOREIGN KEY (`game_id`) REFERENCES `games`(`id`) ON DELETE CASCADE,
                               FOREIGN KEY (`genre_id`) REFERENCES `genres`(`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `game_genres` (`game_id`, `genre_id`, `added_at`) VALUES
(1, 1, '2026-11-14'),
(1, 3, '2026-11-14'),
(1, 10, '2026-11-14'),

(2, 11, '2026-11-14'),
(2, 8, '2026-11-14'),

(3, 9, '2026-11-14'),
(3, 1, '2026-11-14'),
(3, 3, '2026-11-14'),

(4, 10, '2026-11-14'),
(4, 1, '2026-11-14'),
(4, 2, '2026-11-14'),

(5, 3, '2026-11-14'),
(5, 1, '2026-11-14'),
(5, 2, '2026-11-14'),

(6, 10, '2026-11-14'),
(6, 8, '2026-11-14'),
(6, 1, '2026-11-14'),

(7, 3, '2026-11-14'),
(7, 1, '2026-11-14'),

(8, 1, '2026-11-14'),
(8, 2, '2026-11-14'),

(9, 1, '2026-11-14'),
(9, 2, '2026-11-14');