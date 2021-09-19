

CREATE TABLE `branding` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(250) NOT NULL,
  `b_url` varchar(500) NOT NULL,
  `b_reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `b_user_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branding`
--

INSERT INTO `branding` (`b_id`, `b_name`, `b_url`, `b_reg_date`, `b_user_key`) VALUES
(2, 'Yahoo Changed oN', 'yahoo.com', '2021-09-11 14:01:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `campaign_name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `domain_name` varchar(150) CHARACTER SET latin1 NOT NULL,
  `selected_style` varchar(150) CHARACTER SET latin1 NOT NULL,
  `delay` varchar(150) CHARACTER SET latin1 NOT NULL,
  `branding` varchar(150) CHARACTER SET latin1 NOT NULL,
  `date_reg` datetime NOT NULL DEFAULT current_timestamp(),
  `date_update` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `js_code` varchar(255) DEFAULT NULL,
  `user_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `campaign_name`, `domain_name`, `selected_style`, `delay`, `branding`, `date_reg`, `date_update`, `js_code`, `user_key`) VALUES
(1, 'This is a Campaign', 'campaign.com', 'Rounded', '100', 'Yahoo', '2021-09-10 18:32:00', '2021-09-18 11:08:34', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fb_id` int(11) NOT NULL,
  `fb_name` varchar(255) NOT NULL,
  `fb_description` text NOT NULL,
  `fb_star` int(11) NOT NULL,
  `fb_image` text NOT NULL,
  `fb_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `fb_updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `fb_name`, `fb_description`, `fb_star`, `fb_image`, `fb_created_at`, `fb_updated_at`) VALUES
(1, 'Reveew', 'This is a Review', 4, 'protecting-data-and-privacy-in-the-cloud.jpg', '2021-09-18 18:04:38', '2021-09-18 18:04:38'),
(2, 'I got brilliant', 'Brilliant', 4, '1199.jpg', '2021-09-18 18:08:44', '2021-09-18 18:08:44'),
(3, 'I got brilliant', 'sdfsafsafas', 5, '1199.jpg', '2021-09-18 18:52:54', '2021-09-18 18:52:54');

-- --------------------------------------------------------

--
-- Table structure for table `negative_fb`
--

CREATE TABLE `negative_fb` (
  `nf_id` int(11) NOT NULL,
  `nf_email` varchar(255) NOT NULL,
  `nf_phone` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `negative_fb`
--

INSERT INTO `negative_fb` (`nf_id`, `nf_email`, `nf_phone`, `created_at`) VALUES
(1, 'sumirzai@gmail.com', '0782571943', '2021-09-18 18:07:33'),
(2, 'sumirzai@gmail.com', '0782571943', '2021-09-18 18:08:52');

-- --------------------------------------------------------

--
-- Table structure for table `review_link`
--

CREATE TABLE `review_link` (
  `rev_id` int(11) NOT NULL,
  `rev_name` varchar(255) NOT NULL,
  `rev_slug` varchar(255) NOT NULL,
  `rev_desc` text NOT NULL,
  `rev_image` text NOT NULL,
  `rev_approve` int(11) NOT NULL DEFAULT 0,
  `rev_campaign` varchar(255) NOT NULL,
  `rev_nmsg1` text NOT NULL,
  `rev_nmsg2` text NOT NULL,
  `rev_rating` int(11) NOT NULL,
  `rev_pmsg` text NOT NULL,
  `user_key` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review_link`
--

INSERT INTO `review_link` (`rev_id`, `rev_name`, `rev_slug`, `rev_desc`, `rev_image`, `rev_approve`, `rev_campaign`, `rev_nmsg1`, `rev_nmsg2`, `rev_rating`, `rev_pmsg`, `user_key`) VALUES
(11, 'Nishat Review Link', 'Nishat', 'This is a slug testing review Link', 'about_me.jpg', 1, 'This', 'This is used for Testing', 'This is used for Testing', 4, 'This is used for Testing', 3),
(12, 'Some Testing Review', 'Testing-Review', 'This is a Testing Review For Testing FeedBack Form', 'What-is-a-VPN.png', 1, 'This', 'Why You do not want to Suggest Us.', 'Why You do not want to Suggest Us.', 3, 'Thank you for you Review', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sticky_review`
--

CREATE TABLE `sticky_review` (
  `st_id` int(11) NOT NULL,
  `st_name` varchar(255) NOT NULL,
  `st_tags` varchar(255) NOT NULL,
  `st_desc` text NOT NULL,
  `st_stars` int(11) NOT NULL,
  `st_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `st_user` int(11) NOT NULL,
  `st_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sticky_review`
--

INSERT INTO `sticky_review` (`st_id`, `st_name`, `st_tags`, `st_desc`, `st_stars`, `st_date`, `st_user`, `st_image`) VALUES
(8, 'Updated', 'Updates', 'This is a test upload', 5, '2021-09-17 04:22:00', 3, 'WIN_20210520_12_12_52_Pro.jpg'),
(20, 'Ahmad Samad', 'Ahmad, Samad, AFG', 'This is a test Review', 4, '2021-09-17 01:24:00', 2, '1199.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(250) NOT NULL,
  `u_email` varchar(250) NOT NULL,
  `u_password` varchar(32) NOT NULL,
  `u_register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `u_token` varchar(250) NOT NULL,
  `u_statue` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_password`, `u_register_date`, `u_token`, `u_statue`) VALUES
(2, 'Safiullah Mirzai', 'kingsum781@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-09-16 10:10:24', '26535dfc36d09acde14e3a98a2396de2', 1),
(3, 'Ahmad Rahed', 'sumirzai@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-09-16 16:25:52', '66dfd35cae1c4a5b1db6a79ffb7e5716', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branding`
--
ALTER TABLE `branding`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `negative_fb`
--
ALTER TABLE `negative_fb`
  ADD PRIMARY KEY (`nf_id`);

--
-- Indexes for table `review_link`
--
ALTER TABLE `review_link`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `sticky_review`
--
ALTER TABLE `sticky_review`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branding`
--
ALTER TABLE `branding`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `negative_fb`
--
ALTER TABLE `negative_fb`
  MODIFY `nf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review_link`
--
ALTER TABLE `review_link`
  MODIFY `rev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sticky_review`
--
ALTER TABLE `sticky_review`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
