CREATE TABLE `games` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `description` TEXT,
    `release_date` DATE,
    `developer` VARCHAR(255),
    `publisher` VARCHAR(255),
    `added_at` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `cover_image` VARCHAR(255),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `games` (`title`, `description`, `release_date`, `developer`, `publisher`, `added_at`, `cover_image`)
VALUES
(
    'Cyberpunk 2077',
    'An open-world action RPG set in the futuristic Night City.',
    '2020-12-10',
    'CD Projekt Red',
    'CD Projekt',
    '2026-10-05',
    'cyberpunk.jpg'
),
(
    'Silent Hill: Townfall',
    'A psychological horror game set in the Silent Hill universe.',
    '2026-09-22',
    'Screen Burn',
    'Konami',
    '2026-11-07',
    'silent-hill-townfall.jpg'
),
(
    'Hades II',
    'A roguelike action game in which Melinoe battles the forces of the Underworld.',
    '2025-09-25',
    'Supergiant Games',
    'Supergiant Games',
    '2026-11-06',
    'hades-2.jpg'
),
(
    'Far Cry 3',
    'An open-world first-person shooter set on a tropical island controlled by pirates.',
    '2012-11-29',
    'Ubisoft Montreal',
    'Ubisoft',
    '2026-10-02',
    'far-cry-3.jpg'
),
(
    'The Witcher 3: Wild Hunt',
    'An open-world RPG following Geralt of Rivia on a quest to find Ciri.',
    '2015-05-19',
    'CD Projekt Red',
    'CD Projekt',
    '2026-10-18',
    'witcher-3.jpg'
),
(
    'Metro Exodus',
    'A story-driven first-person shooter set in a post-apocalyptic Russia.',
    '2019-02-15',
    '4A Games',
    'Deep Silver',
    '2026-10-11',
    'metro-exodus.jpg'
),
(
    'Kingdom Come: Deliverance II',
    'An open-world medieval RPG following Henry of Skalitz in 15th-century Bohemia.',
    '2025-02-04',
    'Warhorse Studios',
    'Deep Silver',
    '2026-11-01',
    'kcd2.jpg'
),
(
    'Red Dead Redemption 2',
    'An epic tale of life in America at the dawn of the modern age.',
    '2018-10-26',
    'Rockstar Games',
    'Rockstar Games',
    '2026-10-28',
    'rdr2.jpg'
),
(
    'God of War Ragnarök',
    'An action-adventure game following Kratos and Atreus through the Nine Realms.',
    '2022-11-09',
    'Santa Monica Studio',
    'Sony Interactive Entertainment',
    '2026-11-03',
    'gow-ragnarok.jpg'
);