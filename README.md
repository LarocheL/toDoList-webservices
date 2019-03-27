## To DO List WebService

Dépot GIT pour la To Do List dans le cadre de la LP DIM





### Installation base de données

```
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `task_name` text NOT NULL,
  `task_date` date NOT NULL,
  `task_user` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `task` (`task_id`, `task_name`, `task_date`, `task_user`) VALUES
(20, 'max', '2019-03-23', 'guizmo'),
(21, 'maxououcava', '2019-03-23', NULL),
(27, 'Faire p', '2019-03-23', NULL),
(28, 'Faire la vaiselle', '2019-03-23', NULL),
(29, 'maxou', '2019-03-27', 'maxence memrzm');

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `user` (`user_id`, `user_name`) VALUES
(1, 'maxence  memrzm'),
(6, 'lisa'),
(7, 'sailly maxence');


ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
```
### Configuration

Pour lier la bdd 

- init.php
