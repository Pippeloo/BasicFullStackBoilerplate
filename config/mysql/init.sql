-- Create a table
CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `message` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=COMPACT;

-- Set the Primary Key
ALTER TABLE `info`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `id` (`id`),
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- Insert some data
INSERT INTO `info` (`id`, `message`) VALUES
(1, 'Hello There!');