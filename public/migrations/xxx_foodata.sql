-- # Users

INSERT INTO users (email, username, password, name, role)
VALUES
    ('foo-admin@admin.com', 'foo-admin', '$2y$10$RvAdkWzTztrAarOp7pIwWu1Ug0EcBgCXTF7i/feudp.PEGakupqSC', 'foo-admin', '1'),
	('foo-user@example.com', 'foo-user', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'foo-user', '2'),
	('foo-mod@example.com', 'foo-mod', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'foo-mod', '3'),
	('foo-artist@example.com', 'foo-artist', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'foo-artist', '4'),
	('foo-guest@example.com', 'foo-guest', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'foo-guest', '5'),
    ('lucasvdvegt@example.com', 'lucasv', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'Lucas', '0'),
    ('robw@example.com', 'robw', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'Rob', '1'),
    ('javh@example.com', 'javh', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'Jay', '4'),
    ('kime@example.com', 'kime', '$2y$10$uURow.HOfhHwbU10zlnQ3eswTUXkOZ7jjtwnbmdvCJ91/FMWKSnBC', 'Kim', '3');

-- # Events

-- # Streams