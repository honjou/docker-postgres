CREATE TABLE articles (
                          id  SERIAL NOT NULL,
                          body VARCHAR(255),
                          PRIMARY KEY (id)
);

INSERT INTO articles (id, body) VALUES
(1, 'テスト1'),
(2, 'テスト2');