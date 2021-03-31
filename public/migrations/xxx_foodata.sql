-- # Users

INSERT INTO users (email, username, password, name, role)
VALUES
    ('foo-admin@admin.com', 'foo-admin', '$2y$10$RvAdkWzTztrAarOp7pIwWu1Ug0EcBgCXTF7i/feudp.PEGakupqSC', 'foo-admin', '1'),
	('foo-user@example.com', 'foo-user', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'foo-user', '2'),
	('foo-mod@example.com', 'foo-mod', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'foo-mod', '3'),
	('foo-artist@example.com', 'foo-artist', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'foo-artist', '4'),
	('foo-guest@example.com', 'foo-guest', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'foo-guest', '5'),
    ('daveg@example.com', 'daveg', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'Dave', '4'),
    ('lucasvdvegt@example.com', 'lucasv', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'Lucas', '0'),
    ('robw@example.com', 'robw', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'Rob', '1'),
    ('javh@example.com', 'javh', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'Jay', '4'),
    ('kime@example.com', 'kime', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'Kim', '3');

-- # Events

INSERT INTO events (stream_id, name, date, starttime, endtime, artists, host, sociallinks, genre, host_user, moderator_user, description)
VALUES
    (1, "Sample Event", "2021-04-06", "16:00", "17:00", "Sample Artist", "Heerenhuyskamerconcerten", "https://www.heerenhuyskamerconcerten.nl/", "Sample Genre", 4, 3, "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."),
    (2, "Foo Fighters in Concert", "2021-04-07", "20:00", "22:00", "Foo Fighters", "Dave Grohl", "https://twitter.com/foofighters?s=20", "Rock", 6, 8, "Foo Fighters is an American rock band formed in Seattle, Washington in 1994. It was founded by former Nirvana drummer Dave Grohl as a one-man project following the dissolution of Nirvana after the suicide of Kurt Cobain."),
    (3, "Simone Roerade – Bart Wijtman – Teun Wijtman", "2021-07-01", "11:30", "12:15", "Simone Roerade, Bart Wijtman & Teun Wijtman", "Heerenhuyskamerconcerten", "https://www.youtube.com/watch?v=nJrmp4BXbtI", "akoestisch", 4, 3, "Simone Roerade, Bart Wijtman en zoon Teun Wijtman spelen een te gekke akoestische set met hun favoriete covers. Op zondag 1 november 2020 zouden zij voor het éérst samen optreden. Helaas moesten we die première annuleren, maar dit jaar halen we het concert in!"),
    (4, "Simone Roerade – Bart Wijtman – Teun Wijtman", "2021-07-01", "13:00", "13:35", "Simone Roerade, Bart Wijtman & Teun Wijtman", "Heerenhuyskamerconcerten", "https://www.youtube.com/watch?v=nJrmp4BXbtI", "akoestisch", 4, 3, "Simone Roerade, Bart Wijtman en zoon Teun Wijtman spelen een te gekke akoestische set met hun favoriete covers. Op zondag 1 november 2020 zouden zij voor het éérst samen optreden. Helaas moesten we die première annuleren, maar dit jaar halen we het concert in!"),
    (5, "Cellist Joachim Eijlander en studenten", "2021-07-03", "11:30", "12:15", "Joachim Eijlander", "Rotterdams conservatorium", "https://www.heerenhuyskamerconcerten.nl/voorstelling/cellist-joachim-eijlander-en-studenten-gepland/", "Klassiek", 4, 3, "Als Rotterdams cellist geniet Joachim Eijlander van een groeiende belangstelling in de stad voor muziek op nieuwe en bijzondere plekken. Met enthousiasme presenteert hij een afwisselend programma waarin de cello centraal staat, met drie Codarts-studenten, het Rotterdams conservatorium waar Eijlander lesgeeft. Een tweede concert met studenten zal dit voorjaar plaatsvind"),
    (6, "Cellist Joachim Eijlander en studenten", "2021-07-03", "13:00", "13:35", "Joachim Eijlander", "Rotterdams conservatorium", "https://www.heerenhuyskamerconcerten.nl/voorstelling/cellist-joachim-eijlander-en-studenten-gepland/", "Klassiek", 4, 3, "Als Rotterdams cellist geniet Joachim Eijlander van een groeiende belangstelling in de stad voor muziek op nieuwe en bijzondere plekken. Met enthousiasme presenteert hij een afwisselend programma waarin de cello centraal staat, met drie Codarts-studenten, het Rotterdams conservatorium waar Eijlander lesgeeft. Een tweede concert met studenten zal dit voorjaar plaatsvind"),
    (7, "Marcelo Godoy Trio", "2021-07-06", "11:30", "12:15", "Marcelo Godoy, Nelson Latif, Edson Gomes", "Heerenhuyskamerconcerten", "https://www.heerenhuyskamerconcerten.nl/voorstelling/marcelo-godoy-trio/", "Braziliaans", 4, 3, "In de lente kijken we uit naar de heerlijke Braziliaanse muziek van Marcelo Godoy. Hij is nu nog in Brazilië waar hij zijn nieuwe CD promoot. Dat belooft een feestje te worden, want hij komt zéker 100% muzikaal opgeladen terug!"),
    (8, "Marcelo Godoy Trio", "2021-07-06", "13:00", "13:35", "Marcelo Godoy, Nelson Latif, Edson Gomes", "Heerenhuyskamerconcerten", "https://www.heerenhuyskamerconcerten.nl/voorstelling/marcelo-godoy-trio/", "Braziliaans", 4, 3, "In de lente kijken we uit naar de heerlijke Braziliaanse muziek van Marcelo Godoy. Hij is nu nog in Brazilië waar hij zijn nieuwe CD promoot. Dat belooft een feestje te worden, want hij komt zéker 100% muzikaal opgeladen terug!"),


-- # Streams

INSERT INTO streams (event_id)
VALUES
    (1),
    (2),
    (3),
    (4), 
    (5),
    (6),
    (7),
    (8);