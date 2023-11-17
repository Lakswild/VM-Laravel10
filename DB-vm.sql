CREATE TABLE `kategori` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `kategori` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `jenis` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `tipe_input` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `dengan_teks` ENUM ('1', '0'),
  `dengan_dokumen` ENUM ('1', '0'),
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `kategori_tipe_input` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `kategori_id` int NOT NULL,
  `tipe_input` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `form` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `kategori_id` int NOT NULL,
  `jenis_id` int NOT NULL,
  `status_id` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `form_status` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `form_id` int NOT NULL,
  `user_id` int NOT NULL,
  `status_id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `urutan` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `form_detail` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `form_id` int NOT NULL,
  `tipe_input_id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `teks` varchar(255),
  `dokumen` varchar(255),
  `valid` ENUM ('1', '0'),
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `status` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `urutan` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `level_status` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `level_id` int NOT NULL,
  `status_id` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `level` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

CREATE TABLE `user` (
  `id` int PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `no` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level_id` int NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp,
  `deleted_at` timestamp
);

ALTER TABLE `kategori_tipe_input` ADD FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

ALTER TABLE `kategori_tipe_input` ADD FOREIGN KEY (`tipe_input`) REFERENCES `tipe_input` (`id`);

ALTER TABLE `form` ADD FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);

ALTER TABLE `form` ADD FOREIGN KEY (`jenis_id`) REFERENCES `jenis` (`id`);

ALTER TABLE `form` ADD FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

ALTER TABLE `form_status` ADD FOREIGN KEY (`form_id`) REFERENCES `form` (`id`);

ALTER TABLE `form_status` ADD FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

ALTER TABLE `form_detail` ADD FOREIGN KEY (`form_id`) REFERENCES `form` (`id`);

ALTER TABLE `form_detail` ADD FOREIGN KEY (`tipe_input_id`) REFERENCES `tipe_input` (`id`);

ALTER TABLE `level_status` ADD FOREIGN KEY (`level_id`) REFERENCES `level` (`id`);

ALTER TABLE `level_status` ADD FOREIGN KEY (`status_id`) REFERENCES `status` (`id`);

ALTER TABLE `user` ADD FOREIGN KEY (`level_id`) REFERENCES `level` (`id`);
