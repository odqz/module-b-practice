-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2026 at 03:56 PM
-- Server version: 10.11.16-MariaDB
-- PHP Version: 8.5.12

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `created_at`, `updated_at`) VALUES
(1, 'Graduation', NULL, NULL),
(2, 'Festival', NULL, NULL),
(3, 'Competition', NULL, NULL),
(4, 'Private Session', NULL, NULL),
(5, 'Wedding/Engagement', NULL, NULL),
(6, 'Birthday', NULL, NULL),
(7, 'School Events', NULL, NULL),
(8, 'Charity', NULL, NULL),
(9, 'Corporate', NULL, NULL),
(10, 'Pet Events', NULL, NULL),
(11, 'Seasonal', NULL, NULL),
(12, 'Photography Walks', NULL, NULL),
(13, 'Community', NULL, NULL);
--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `cat_id`, `event_name`, `event_type`, `event_city`, `event_date`, `event_time`, `event_note`, `created_at`, `updated_at`) VALUES
(1, 1, 'Portsmouth Graduation 2025', 'public', 'Portsmouth', '2025-07-01', '14:00:00', 'Open to public. Photos available by student name.', NULL, NULL),
(2, 10, 'Summer Dog Show', 'public', 'Chichester', '2025-08-10', '12:00:00', 'Open event. Pet owners can search by dog name.', NULL, NULL),
(3, 3, 'Bournemouth Dance Finals', 'public', 'Bournemouth', '2025-09-03', '16:00:00', '', NULL, NULL),
(4, 2, 'Vintage Car Rally', 'public', 'Brighton', '2025-08-05', '13:00:00', 'Free for all. Classics and modern cars.', NULL, NULL),
(5, 2, 'Community Art Festival', 'public', 'Portsmouth', '2025-07-22', '10:00:00', 'Local artists exhibit works.', NULL, NULL),
(6, 13, 'Hastings Beach BBQ', 'public', 'Hastings', '2025-07-19', '18:00:00', '', NULL, NULL),
(7, 13, 'Public Open Mic Night', 'public', 'Reading', '2025-07-12', '20:00:00', 'Singers and poets welcome.', NULL, NULL),
(8, 2, 'Science Expo', 'public', 'Oxford', '2025-08-15', '11:00:00', '', NULL, NULL),
(9, 2, 'Food Truck Fiesta', 'public', 'Southampton', '2025-07-28', '12:00:00', 'Try 20+ food vendors.', NULL, NULL),
(10, 3, 'Marathon Finish Line', 'public', 'London', '2025-10-01', '14:00:00', 'Public cheering area and photos.', NULL, NULL),
(11, 12, 'Photography Walk', 'public', 'Bath', '2025-06-30', '09:00:00', '', NULL, NULL),
(12, 11, 'Community Fireworks Night', 'public', 'Exeter', '2025-11-05', '19:00:00', 'Free entry bring blankets.', NULL, NULL),
(13, 2, 'Portsmouth Food Festival', 'public', 'Portsmouth', '2025-07-18', '12:00:00', 'Open to all. Food stalls and live music.', NULL, NULL),
(14, 7, 'University Open Day', 'public', 'Southampton', '2025-09-14', '10:00:00', 'For prospective students and families.', NULL, NULL),
(15, 8, 'Charity Fun Run', 'public', 'Guildford', '2025-08-20', '09:30:00', '', NULL, NULL),
(16, 4, 'Smith Family Portraits', 'private', 'Southampton', '2025-06-15', '10:30:00', 'Private booking. Access restricted to family.', NULL, NULL),
(17, 5, 'Olivia & Marcus Wedding', 'private', 'Winchester', '2025-06-28', '15:00:00', '', NULL, NULL),
(18, 7, 'St. Mary\'s Year 11 Prom', 'private', 'Guildford', '2025-07-05', '19:00:00', 'Private school prom. Code required to access photos.', NULL, NULL),
(19, 4, 'Jones Family Reunion', 'private', 'Oxford', '2025-07-14', '13:30:00', '', NULL, NULL),
(20, 9, 'Corporate Headshots', 'private', 'London', '2025-08-01', '09:00:00', 'Photoshoot for internal use only.', NULL, NULL),
(21, 4, 'Lucy\'s 18th Birthday', 'private', 'Reading', '2025-09-10', '18:00:00', 'Private garden party celebration.', NULL, NULL),
(22, 5, 'Wilson Engagement Party', 'private', 'Bath', '2025-08-12', '17:00:00', '', NULL, NULL),
(23, 4, 'Model Portfolio Shoot', 'private', 'Brighton', '2025-07-25', '14:00:00', 'Booked model sessions only.', NULL, NULL),
(24, 4, 'Harris Baby Shower', 'private', 'Bristol', '2025-06-27', '15:00:00', 'Photos shared only with attendees.', NULL, NULL),
(25, 11, 'Studio Christmas Session', 'private', 'Southampton', '2025-12-12', '11:00:00', '', NULL, NULL),
(26, 10, 'Pet Portraits Day', 'private', 'Portsmouth', '2025-07-03', '10:00:00', 'Private bookings only.', NULL, NULL),
(27, 1, 'Graduation Photos Retake', 'private', 'Guildford', '2025-07-15', '14:00:00', 'Only for students who missed main event.', NULL, NULL),
(28, 9, 'Client Branding Session', 'private', 'Oxford', '2025-09-03', '09:00:00', '', NULL, NULL),
(29, 11, 'Family Christmas Portraits', 'private', 'Chichester', '2025-12-03', '13:00:00', 'Access via family login only.', NULL, NULL),
(30, 5, 'Engagement Shoot – Priya & Jay', 'private', 'Winchester', '2025-10-12', '15:00:00', '', NULL, NULL);

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`pic_id`, `event_id`, `pic_name`, `pic_locator`, `pic_is_active`, `pic_path`, `pic_note`, `created_at`, `updated_at`) VALUES
(1, 1, 'event_1_pic_1.jpg', 'E1P1', 0, 'public_events/portsmouth_graduation_2025/event_1_pic_1.jpg', NULL, NULL, NULL),
(2, 1, 'event_1_pic_2.jpg', 'E1P2', 0, 'public_events/portsmouth_graduation_2025/event_1_pic_2.jpg', NULL, NULL, NULL),
(3, 1, 'event_1_pic_3.jpg', 'E1P3', 0, 'public_events/portsmouth_graduation_2025/event_1_pic_3.jpg', NULL, NULL, NULL),
(4, 1, 'event_1_pic_4.jpg', 'E1P4', 0, 'public_events/portsmouth_graduation_2025/event_1_pic_4.jpg', NULL, NULL, NULL),
(5, 2, 'event_2_pic_1.jpg', 'E2P1', 0, 'public_events/summer_dog_show/event_2_pic_1.jpg', NULL, NULL, NULL),
(6, 2, 'event_2_pic_2.jpg', 'E2P2', 0, 'public_events/summer_dog_show/event_2_pic_2.jpg', NULL, NULL, NULL),
(7, 2, 'event_2_pic_3.jpg', 'E2P3', 0, 'public_events/summer_dog_show/event_2_pic_3.jpg', NULL, NULL, NULL),
(8, 2, 'event_2_pic_4.jpg', 'E2P4', 0, 'public_events/summer_dog_show/event_2_pic_4.jpg', NULL, NULL, NULL),
(9, 2, 'event_2_pic_5.jpg', 'E2P5', 0, 'public_events/summer_dog_show/event_2_pic_5.jpg', NULL, NULL, NULL),
(10, 3, 'event_3_pic_1.jpg', 'E3P1', 0, 'public_events/bournemouth_dance_finals/event_3_pic_1.jpg', NULL, NULL, NULL),
(11, 3, 'event_3_pic_2.jpg', 'E3P2', 0, 'public_events/bournemouth_dance_finals/event_3_pic_2.jpg', NULL, NULL, NULL),
(12, 3, 'event_3_pic_3.jpg', 'E3P3', 0, 'public_events/bournemouth_dance_finals/event_3_pic_3.jpg', NULL, NULL, NULL),
(13, 3, 'event_3_pic_4.jpg', 'E3P4', 0, 'public_events/bournemouth_dance_finals/event_3_pic_4.jpg', NULL, NULL, NULL),
(14, 4, 'event_4_pic_1.jpg', 'E4P1', 0, 'public_events/vintage_car_rally/event_4_pic_1.jpg', NULL, NULL, NULL),
(15, 4, 'event_4_pic_2.jpg', 'E4P2', 0, 'public_events/vintage_car_rally/event_4_pic_2.jpg', NULL, NULL, NULL),
(16, 4, 'event_4_pic_3.jpg', 'E4P3', 0, 'public_events/vintage_car_rally/event_4_pic_3.jpg', NULL, NULL, NULL),
(17, 4, 'event_4_pic_4.jpg', 'E4P4', 0, 'public_events/vintage_car_rally/event_4_pic_4.jpg', NULL, NULL, NULL),
(18, 4, 'event_4_pic_5.jpg', 'E4P5', 0, 'public_events/vintage_car_rally/event_4_pic_5.jpg', NULL, NULL, NULL),
(19, 4, 'event_4_pic_6.jpg', 'E4P6', 0, 'public_events/vintage_car_rally/event_4_pic_6.jpg', NULL, NULL, NULL),
(20, 4, 'event_4_pic_7.jpg', 'E4P7', 0, 'public_events/vintage_car_rally/event_4_pic_7.jpg', NULL, NULL, NULL),
(21, 4, 'event_4_pic_8.jpeg', 'E4P8', 0, 'public_events/vintage_car_rally/event_4_pic_8.jpeg', NULL, NULL, NULL),
(22, 5, 'event_5_pic_1.jpg', 'E5P1', 0, 'public_events/community_art_festival/event_5_pic_1.jpg', NULL, NULL, NULL),
(23, 5, 'event_5_pic_2.jpg', 'E5P2', 0, 'public_events/community_art_festival/event_5_pic_2.jpg', NULL, NULL, NULL),
(24, 5, 'event_5_pic_3.jpg', 'E5P3', 0, 'public_events/community_art_festival/event_5_pic_3.jpg', NULL, NULL, NULL),
(25, 5, 'event_5_pic_4.jpg', 'E5P4', 0, 'public_events/community_art_festival/event_5_pic_4.jpg', NULL, NULL, NULL),
(26, 6, 'event_6_pic_1.jpg', 'E6P1', 0, 'public_events/hastings_beach_bbq/event_6_pic_1.jpg', NULL, NULL, NULL),
(27, 6, 'event_6_pic_2.jpg', 'E6P2', 0, 'public_events/hastings_beach_bbq/event_6_pic_2.jpg', NULL, NULL, NULL),
(28, 6, 'event_6_pic_3.jpg', 'E6P3', 0, 'public_events/hastings_beach_bbq/event_6_pic_3.jpg', NULL, NULL, NULL),
(29, 7, 'event_7_pic_1.jpg', 'E7P1', 0, 'public_events/public_open_mic_night/event_7_pic_1.jpg', NULL, NULL, NULL),
(30, 7, 'event_7_pic_2.jpg', 'E7P2', 0, 'public_events/public_open_mic_night/event_7_pic_2.jpg', NULL, NULL, NULL),
(31, 7, 'event_7_pic_3.jpg', 'E7P3', 0, 'public_events/public_open_mic_night/event_7_pic_3.jpg', NULL, NULL, NULL),
(32, 7, 'event_7_pic_4.jpg', 'E7P4', 0, 'public_events/public_open_mic_night/event_7_pic_4.jpg', NULL, NULL, NULL),
(33, 8, 'event_8_pic_1.jpg', 'E8P1', 0, 'public_events/science_expo/event_8_pic_1.jpg', NULL, NULL, NULL),
(34, 8, 'event_8_pic_2.jpg', 'E8P2', 0, 'public_events/science_expo/event_8_pic_2.jpg', NULL, NULL, NULL),
(35, 8, 'event_8_pic_3.jpg', 'E8P3', 0, 'public_events/science_expo/event_8_pic_3.jpg', NULL, NULL, NULL),
(36, 8, 'event_8_pic_4.jpg', 'E8P4', 0, 'public_events/science_expo/event_8_pic_4.jpg', NULL, NULL, NULL),
(37, 9, 'event_9_pic_1.jpg', 'E9P1', 0, 'public_events/food_truck_fiesta/event_9_pic_1.jpg', NULL, NULL, NULL),
(38, 9, 'event_9_pic_2.jpg', 'E9P2', 0, 'public_events/food_truck_fiesta/event_9_pic_2.jpg', NULL, NULL, NULL),
(39, 9, 'event_9_pic_3.jpg', 'E9P3', 0, 'public_events/food_truck_fiesta/event_9_pic_3.jpg', NULL, NULL, NULL),
(40, 9, 'event_9_pic_4.jpg', 'E9P4', 0, 'public_events/food_truck_fiesta/event_9_pic_4.jpg', NULL, NULL, NULL),
(41, 10, 'event_10_pic_1.jpg', 'E10P1', 0, 'public_events/marathon_finish_line/event_10_pic_1.jpg', NULL, NULL, NULL),
(42, 10, 'event_10_pic_2.jpg', 'E10P2', 0, 'public_events/marathon_finish_line/event_10_pic_2.jpg', NULL, NULL, NULL),
(43, 10, 'event_10_pic_3.jpg', 'E10P3', 0, 'public_events/marathon_finish_line/event_10_pic_3.jpg', NULL, NULL, NULL),
(44, 10, 'event_10_pic_4.jpg', 'E10P4', 0, 'public_events/marathon_finish_line/event_10_pic_4.jpg', NULL, NULL, NULL),
(45, 10, 'event_10_pic_5.jpg', 'E10P5', 0, 'public_events/marathon_finish_line/event_10_pic_5.jpg', NULL, NULL, NULL),
(46, 11, 'event_11_pic_1.jpg', 'E11P1', 0, 'public_events/photography_walk/event_11_pic_1.jpg', NULL, NULL, NULL),
(47, 11, 'event_11_pic_2.jpg', 'E11P2', 0, 'public_events/photography_walk/event_11_pic_2.jpg', NULL, NULL, NULL),
(48, 11, 'event_11_pic_3.jpg', 'E11P3', 0, 'public_events/photography_walk/event_11_pic_3.jpg', NULL, NULL, NULL),
(49, 12, 'event_12_pic_1.jpg', 'E12P1', 0, 'public_events/community_fireworks_night/event_12_pic_1.jpg', NULL, NULL, NULL),
(50, 12, 'event_12_pic_2.jpg', 'E12P2', 0, 'public_events/community_fireworks_night/event_12_pic_2.jpg', NULL, NULL, NULL),
(51, 12, 'event_12_pic_3.jpg', 'E12P3', 0, 'public_events/community_fireworks_night/event_12_pic_3.jpg', NULL, NULL, NULL),
(52, 13, 'event_13_pic_1.jpg', 'E13P1', 0, 'public_events/portsmouth_food_festival/event_13_pic_1.jpg', NULL, NULL, NULL),
(53, 13, 'event_13_pic_2.jpg', 'E13P2', 0, 'public_events/portsmouth_food_festival/event_13_pic_2.jpg', NULL, NULL, NULL),
(54, 13, 'event_13_pic_3.jpg', 'E13P3', 0, 'public_events/portsmouth_food_festival/event_13_pic_3.jpg', NULL, NULL, NULL),
(55, 14, 'event_14_pic_1.jpg', 'E14P1', 0, 'public_events/university_open_day/event_14_pic_1.jpg', NULL, NULL, NULL),
(56, 14, 'event_14_pic_2.jpg', 'E14P2', 0, 'public_events/university_open_day/event_14_pic_2.jpg', NULL, NULL, NULL),
(57, 14, 'event_14_pic_3.jpg', 'E14P3', 0, 'public_events/university_open_day/event_14_pic_3.jpg', NULL, NULL, NULL),
(58, 14, 'event_14_pic_4.jpg', 'E14P4', 0, 'public_events/university_open_day/event_14_pic_4.jpg', NULL, NULL, NULL),
(59, 14, 'event_14_pic_5.jpg', 'E14P5', 0, 'public_events/university_open_day/event_14_pic_5.jpg', NULL, NULL, NULL),
(60, 15, 'event_15_pic_1.jpg', 'E15P1', 0, 'public_events/charity_fun_run/event_15_pic_1.jpg', NULL, NULL, NULL),
(61, 15, 'event_15_pic_2.jpg', 'E15P2', 0, 'public_events/charity_fun_run/event_15_pic_2.jpg', NULL, NULL, NULL),
(62, 15, 'event_15_pic_3.jpg', 'E15P3', 0, 'public_events/charity_fun_run/event_15_pic_3.jpg', NULL, NULL, NULL),
(63, 16, 'event_16_pic_1.jpg', 'E16P1', 0, 'private_events/smith_family_portraits/event_16_pic_1.jpg', NULL, NULL, NULL),
(64, 17, 'event_17_pic_1.jpg', 'E17P1', 0, 'private_events/olivia_marcus_wedding/event_17_pic_1.jpg', NULL, NULL, NULL),
(65, 17, 'event_17_pic_2.jpg', 'E17P2', 0, 'private_events/olivia_marcus_wedding/event_17_pic_2.jpg', NULL, NULL, NULL),
(66, 18, 'event_18_pic_1.jpg', 'E18P1', 0, 'private_events/st_marys_year_11_prom/event_18_pic_1.jpg', NULL, NULL, NULL),
(67, 18, 'event_18_pic_2.jpg', 'E18P2', 0, 'private_events/st_marys_year_11_prom/event_18_pic_2.jpg', NULL, NULL, NULL),
(68, 18, 'event_18_pic_3.jpg', 'E18P3', 0, 'private_events/st_marys_year_11_prom/event_18_pic_3.jpg', NULL, NULL, NULL),
(69, 19, 'event_19_pic_1.jpg', 'E19P1', 0, 'private_events/jones_family_reunion/event_19_pic_1.jpg', NULL, NULL, NULL),
(70, 20, 'event_20_pic_1.jpg', 'E20P1', 0, 'private_events/corporate_headshots/event_20_pic_1.jpg', NULL, NULL, NULL),
(71, 20, 'event_20_pic_2.jpg', 'E20P2', 0, 'private_events/corporate_headshots/event_20_pic_2.jpg', NULL, NULL, NULL),
(72, 20, 'event_20_pic_3.jpg', 'E20P3', 0, 'private_events/corporate_headshots/event_20_pic_3.jpg', NULL, NULL, NULL),
(73, 21, 'event_21_pic_1.jpg', 'E21P1', 0, 'private_events/lucys_18th_birthday/event_21_pic_1.jpg', NULL, NULL, NULL),
(74, 22, 'event_22_pic_1.jpg', 'E22P1', 0, 'private_events/wilson_engagement_party/event_22_pic_1.jpg', NULL, NULL, NULL),
(75, 22, 'event_22_pic_2.jpg', 'E22P2', 0, 'private_events/wilson_engagement_party/event_22_pic_2.jpg', NULL, NULL, NULL),
(76, 22, 'event_22_pic_3.jpg', 'E22P3', 0, 'private_events/wilson_engagement_party/event_22_pic_3.jpg', NULL, NULL, NULL),
(77, 23, 'event_23_pic_1.jpg', 'E23P1', 0, 'private_events/model_portfolio_shoot/event_23_pic_1.jpg', NULL, NULL, NULL),
(78, 24, 'event_24_pic_1.jpg', 'E24P1', 0, 'private_events/harris_baby_shower/event_24_pic_1.jpg', NULL, NULL, NULL),
(79, 24, 'event_24_pic_2.jpg', 'E24P2', 0, 'private_events/harris_baby_shower/event_24_pic_2.jpg', NULL, NULL, NULL),
(80, 25, 'event_25_pic_1.jpg', 'E25P1', 0, 'private_events/studio_christmas_session/event_25_pic_1.jpg', NULL, NULL, NULL),
(81, 25, 'event_25_pic_2.jpg', 'E25P2', 0, 'private_events/studio_christmas_session/event_25_pic_2.jpg', NULL, NULL, NULL),
(82, 26, 'event_26_pic_1.jpg', 'E26P1', 0, 'private_events/pet_portraits_day/event_26_pic_1.jpg', NULL, NULL, NULL),
(83, 26, 'event_26_pic_2.jpg', 'E26P2', 0, 'private_events/pet_portraits_day/event_26_pic_2.jpg', NULL, NULL, NULL),
(84, 26, 'event_26_pic_3.jpg', 'E26P3', 0, 'private_events/pet_portraits_day/event_26_pic_3.jpg', NULL, NULL, NULL),
(85, 26, 'event_26_pic_4.jpg', 'E26P4', 0, 'private_events/pet_portraits_day/event_26_pic_4.jpg', NULL, NULL, NULL),
(86, 26, 'event_26_pic_5.jpg', 'E26P5', 0, 'private_events/pet_portraits_day/event_26_pic_5.jpg', NULL, NULL, NULL),
(87, 27, 'event_27_pic_1.jpg', 'E27P1', 0, 'private_events/graduation_photos_retake/event_27_pic_1.jpg', NULL, NULL, NULL),
(88, 27, 'event_27_pic_2.jpg', 'E27P2', 0, 'private_events/graduation_photos_retake/event_27_pic_2.jpg', NULL, NULL, NULL),
(89, 27, 'event_27_pic_3.jpg', 'E27P3', 0, 'private_events/graduation_photos_retake/event_27_pic_3.jpg', NULL, NULL, NULL),
(90, 27, 'event_27_pic_4.jpg', 'E27P4', 0, 'private_events/graduation_photos_retake/event_27_pic_4.jpg', NULL, NULL, NULL),
(91, 28, 'event_28_pic_1.jpg', 'E28P1', 0, 'private_events/client_branding_session/event_28_pic_1.jpg', NULL, NULL, NULL),
(92, 28, 'event_28_pic_2.jpg', 'E28P2', 0, 'private_events/client_branding_session/event_28_pic_2.jpg', NULL, NULL, NULL),
(93, 28, 'event_28_pic_3.jpg', 'E28P3', 0, 'private_events/client_branding_session/event_28_pic_3.jpg', NULL, NULL, NULL),
(94, 28, 'event_28_pic_4.jpg', 'E28P4', 0, 'private_events/client_branding_session/event_28_pic_4.jpg', NULL, NULL, NULL),
(95, 28, 'event_28_pic_5.jpg', 'E28P5', 0, 'private_events/client_branding_session/event_28_pic_5.jpg', NULL, NULL, NULL),
(96, 28, 'event_28_pic_6.jpg', 'E28P6', 0, 'private_events/client_branding_session/event_28_pic_6.jpg', NULL, NULL, NULL),
(97, 29, 'event_29_pic_1.jpg', 'E29P1', 0, 'private_events/family_christmas_portraits/event_29_pic_1.jpg', NULL, NULL, NULL),
(98, 30, 'event_30_pic_1.jpg', 'E30P1', 0, 'private_events/engagement_shoot_priya_jay/event_30_pic_1.jpg', NULL, NULL, NULL);


--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_fname`, `cust_lname`, `cust_phone`, `cust_addr1`, `cust_addr2`, `cust_postcode`, `cust_email`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Doe', '07123456689', '123 Street', '', 'AB12CD', 'john.doe@mail.com', NULL, NULL),
(2, 'Alice', 'Smith', '07111222333', '456 Avenue', '', 'CD34EF', 'alice.smith@mail.com', NULL, NULL),
(3, 'Michael', 'Brown', '07987654321', '789 Boulevard', '', 'EF56GH', 'michael.brown@mail.com', NULL, NULL),
(4, 'Emily', 'Davis', '07456789123', '22 Green Lane', 'Flat 3A', 'GH78IJ', 'emily.davis@mail.com', NULL, NULL),
(5, 'Olivia', 'Wilson', '07555667788', '10 Kings Road', '', 'JK90LM', 'olivia.wilson@mail.com', NULL, NULL),
(6, 'Sophie', 'Taylor', '07711223344', '5 Orchard View', '', 'MN12OP', 'sophie.taylor@mail.com', NULL, NULL),
(7, 'David', 'Smith', '07741283244', '2 Paddington Street', '', 'SW12EP', 'david.smith@mail.com', NULL, NULL),
(8, 'Marcus', 'Wilson', '07515647758', '10 Kings Road', '', 'JK90LM', 'marcus.wilson@mail.com', NULL, NULL);

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_email`, `order_date`, `order_note`, `created_at`, `updated_at`) VALUES
(1, 'john.doe@mail.com', '2025-10-27', 'Sample order note', NULL, NULL),
(2, 'john.doe@mail.com', '2025-10-07', 'Another sample order', NULL, NULL),
(3, 'john.doe@mail.com', '2025-11-10', '', NULL, NULL),
(4, 'john.doe@mail.com', '2025-11-16', '', NULL, NULL),
(5, 'john.doe@mail.com', '2025-08-27', 'Bulk order', NULL, NULL),
(6, 'john.doe@mail.com', '2025-11-20', '', NULL, NULL),
(7, 'john.doe@mail.com', '2025-10-22', '', NULL, NULL),
(8, 'john.doe@mail.com', '2025-11-06', '', NULL, NULL),
(9, 'john.doe@mail.com', '2025-10-12', '', NULL, NULL);



--
-- Dumping data for table `picture_sizes`
--

INSERT INTO `picture_sizes` (`pic_size_id`, `pic_size_label`, `pic_size_width`, `pic_size_height`, `pic_size_price`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Toni Mohr', 753, 627, 22.86, '2026-11-11 14:45:20', '2026-11-11 14:45:20'),
(2, 'Durward Reichert', 249, 186, 53.08, '2026-11-11 14:45:20', '2026-11-11 14:45:20'),
(3, 'Demarco Schiller', 504, 938, 85.75, '2026-11-11 14:45:20', '2026-11-11 14:45:20'),
(4, 'Ryder Okuneva', 608, 572, 86.32, '2026-11-11 14:45:20', '2026-11-11 14:45:20'),
(5, 'Baron Kovacek', 679, 883, 64.34, '2026-11-11 14:45:20', '2026-11-11 14:45:20'),
(6, 'Erin Mann', 835, 317, 56.74, '2026-11-11 14:45:20', '2026-11-11 14:45:20'),
(7, 'Dr. Freddie Ruecker PhD', 310, 746, 42.33, '2026-11-11 14:45:20', '2026-11-11 14:45:20'),
(8, 'Jennyfer Hansen', 462, 378, 62.42, '2026-11-11 14:45:20', '2026-11-11 14:45:20'),
(9, 'Angus Jacobi', 680, 743, 52.07, '2026-11-11 14:45:20', '2026-11-11 14:45:20'),
(10, 'Miss Jacinthe Sauer', 368, 570, 61.86, '2026-11-11 14:45:20', '2026-11-11 14:45:20');

--
-- Dumping data for table `order_pictures`
--

INSERT INTO `order_pictures` (`order_picture_id`, `order_id`, `pic_id`, `pic_size_id`, `pic_qty`, `pic_order_note`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 2, '', NULL, NULL),
(2, 1, 5, 3, 2, '', NULL, NULL),
(3, 2, 15, 4, 5, '', NULL, NULL),
(4, 2, 9, 4, 10, '', NULL, NULL),
(5, 3, 16, 3, 1, '', NULL, NULL),
(6, 3, 5, 3, 2, '', NULL, NULL),
(7, 3, 7, 1, 10, '', NULL, NULL),
(8, 4, 20, 7, 10, '', NULL, NULL),
(9, 5, 15, 5, 5, '', NULL, NULL),
(10, 5, 13, 6, 1, '', NULL, NULL),
(11, 5, 7, 1, 10, '', NULL, NULL),
(12, 6, 24, 3, 12, '', NULL, NULL),
(13, 7, 8, 2, 3, '', NULL, NULL),
(14, 8, 12, 4, 6, '', NULL, NULL),
(15, 9, 3, 2, 4, '', NULL, NULL),
(16, 9, 10, 5, 2, '', NULL, NULL);

--
-- Dumping data for table `event_accesses`
--

INSERT INTO `event_accesses` (`id`, `event_id`, `cust_id`, `created_at`, `updated_at`) VALUES
(2, 16, 2, '2026-11-11 14:52:57', '2026-11-11 14:52:57'),
(3, 26, 6, '2026-11-11 14:52:57', '2026-11-11 14:52:57'),
(4, 10, 2, '2026-11-11 14:52:57', '2026-11-11 14:52:57'),
(5, 10, 2, '2026-11-11 14:52:57', '2026-11-11 14:52:57'),
(6, 17, 7, '2026-11-11 14:52:57', '2026-11-11 14:52:57'),
(7, 19, 2, '2026-11-11 14:52:57', '2026-11-11 14:52:57'),
(8, 21, 8, '2026-11-11 14:52:57', '2026-11-11 14:52:57'),
(9, 19, 1, '2026-11-11 14:52:57', '2026-11-11 14:52:57'),
(10, 25, 4, '2026-11-11 14:52:57', '2026-11-11 14:52:57'),
(11, 21, 4, '2026-11-11 14:52:57', '2026-11-11 14:52:57');
