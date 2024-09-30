-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/09/2024 às 22:03
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `poptag_app_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `blocks`
--

CREATE TABLE `blocks` (
  `block_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `block_type` varchar(32) NOT NULL,
  `block_orderliness` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `blocks`
--

INSERT INTO `blocks` (`block_id`, `link_id`, `block_type`, `block_orderliness`) VALUES
(1, 1, 'avatar', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `block_avatar`
--

CREATE TABLE `block_avatar` (
  `avatar_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `avatar_image` varchar(255) DEFAULT NULL,
  `avatar_image_alt` varchar(255) DEFAULT NULL,
  `avatar_location_url` varchar(255) DEFAULT NULL,
  `avatar_target_link` varchar(10) DEFAULT NULL,
  `avatar_height` varchar(50) DEFAULT NULL,
  `avatar_width` varchar(50) DEFAULT NULL,
  `avatar_border_radius` varchar(50) DEFAULT NULL,
  `avatar_border_shadow_offset_x` varchar(50) DEFAULT NULL,
  `avatar_border_shadow_offset_y` varchar(50) DEFAULT NULL,
  `avatar_border_shadow_blur` varchar(50) DEFAULT NULL,
  `avatar_border_shadow_spread` varchar(50) DEFAULT NULL,
  `avatar_border_shadow_color` varchar(50) DEFAULT NULL,
  `avatar_border_width` varchar(50) DEFAULT NULL,
  `avatar_border_style` varchar(50) DEFAULT NULL,
  `avatar_border_color` varchar(50) DEFAULT NULL,
  `avatar_object_fit` varchar(50) DEFAULT NULL,
  `avatar_is_enabled` tinyint(4) NOT NULL DEFAULT 1,
  `avatar_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `avatar_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `block_avatar`
--

INSERT INTO `block_avatar` (`avatar_id`, `link_id`, `avatar_image`, `avatar_image_alt`, `avatar_location_url`, `avatar_target_link`, `avatar_height`, `avatar_width`, `avatar_border_radius`, `avatar_border_shadow_offset_x`, `avatar_border_shadow_offset_y`, `avatar_border_shadow_blur`, `avatar_border_shadow_spread`, `avatar_border_shadow_color`, `avatar_border_width`, `avatar_border_style`, `avatar_border_color`, `avatar_object_fit`, `avatar_is_enabled`, `avatar_created_at`, `avatar_updated_at`) VALUES
(1, 1, 'gxzqu2k3.jpeg', NULL, NULL, NULL, '125px', '125px', 'round', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2024-09-29 19:48:45', '2024-09-30 03:17:06');

-- --------------------------------------------------------

--
-- Estrutura para tabela `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `page` varchar(32) NOT NULL,
  `prefix` varchar(6) NOT NULL,
  `en` longtext NOT NULL,
  `pt` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `languages`
--

INSERT INTO `languages` (`id`, `page`, `prefix`, `en`, `pt`) VALUES
(1, 'section_footer', 'tr_1', 'About Us', 'Sobre nós'),
(2, 'section_footer', 'tr_2', 'Support', 'Suporte'),
(3, 'section_footer', 'tr_3', 'Help', 'Ajuda'),
(4, 'section_footer', 'tr_4', 'Affiliates', 'Afiliados'),
(5, 'section_footer', 'tr_5', 'Plans', 'Planos'),
(6, 'section_footer', 'tr_6', 'Security', 'Segurança'),
(7, 'section_footer', 'tr_7', 'Terms', 'Termos'),
(8, 'section_footer', 'tr_8', 'Privacy', 'Privacidade'),
(9, 'section_footer', 'tr_9', '', ''),
(10, 'section_footer', 'tr_10', '', ''),
(11, 'section_footer', 'tr_11', '', ''),
(12, 'section_footer', 'tr_12', '', ''),
(13, 'section_footer', 'tr_13', '', ''),
(14, 'section_footer', 'tr_14', '', ''),
(15, 'section_footer', 'tr_15', '', ''),
(16, 'section_footer', 'tr_16', '', ''),
(17, 'page_login', 'tr_17', 'Sign In', 'Entrar'),
(18, 'page_login', 'tr_18', 'We are glad to see you again!', 'Estamos felizes em ver você novamente!'),
(19, 'page_login', 'tr_19', 'Email Address', 'Endereço de email'),
(20, 'page_login', 'tr_20', 'Enter Your Email', 'Digite seu e-mail'),
(21, 'page_login', 'tr_21', 'Password', 'Senha'),
(22, 'page_login', 'tr_22', 'Enter Password', 'Digite a senha'),
(23, 'page_login', 'tr_23', 'Remember Me', 'Lembre de mim'),
(24, 'page_login', 'tr_24', 'Forgot Password ?', 'Esqueceu a senha?'),
(25, 'page_login', 'tr_25', 'Sign In', 'Entrar'),
(26, 'page_login', 'tr_26', 'Don\'t have an account?', 'Não tem uma conta?'),
(27, 'page_login', 'tr_27', 'Sign Up', 'Inscrever-se'),
(28, 'page_signup', 'tr_28', 'Sign Up', 'Inscrever-se'),
(29, 'page_signup', 'tr_29', 'Your data will be safe with us.', 'Seus dados estarão seguros conosco.'),
(30, 'page_signup', 'tr_30', 'Full Name', 'Nome completo'),
(31, 'page_signup', 'tr_31', 'Enter Your Name', 'Digite seu nome'),
(32, 'page_signup', 'tr_32', 'Email Address', 'Endereço de email'),
(33, 'page_signup', 'tr_33', 'Enter Your Email', 'Digite seu e-mail'),
(34, 'page_signup', 'tr_34', 'Password', 'Senha'),
(35, 'page_signup', 'tr_35', 'Enter Password', 'Digite a senha'),
(36, 'page_signup', 'tr_36', 'Sign Up', 'Inscrever-se'),
(37, 'page_signup', 'tr_37', 'Already have an account?', 'Já tem uma conta?'),
(38, 'page_signup', 'tr_38', 'Log In', 'Conecte-se'),
(39, 'page_signup', 'tr_39', '', ''),
(40, 'page_signup', 'tr_40', '', ''),
(41, 'page_signup', 'tr_41', '', ''),
(42, 'page_signup', 'tr_42', '', ''),
(43, 'section_header', 'tr_43', 'Home', 'Home'),
(44, 'section_header', 'tr_44', 'About', 'Sobre'),
(45, 'section_header', 'tr_45', '', 'Diretórios'),
(46, 'section_header', 'tr_46', '', 'Shop'),
(47, 'section_header', 'tr_47', 'Contact', 'Contato'),
(48, 'section_header', 'tr_48', '', 'Entrar'),
(49, 'section_header', 'tr_49', '', 'Criar conta'),
(50, 'section_header', 'tr_50', '', 'Biolinks'),
(51, 'section_header', 'tr_51', '', 'Cartão de visitas'),
(52, 'section_header', 'tr_52', '', 'Catálogo de produtos'),
(53, 'section_header', 'tr_53', '', 'Cardápio'),
(54, 'section_header', 'tr_54', '', 'Convites'),
(55, 'section_header', 'tr_55', '', 'Mini site'),
(56, 'section_header', 'tr_56', '', 'Santinho digital'),
(57, 'section_header', 'tr_57', '', 'Cadastro de Pets'),
(58, 'section_header', 'tr_58', '', 'Pessoas'),
(59, 'section_header', 'tr_59', '', 'Empresas'),
(60, 'section_header', 'tr_60', '', 'Pets'),
(61, 'section_header', 'tr_61', '', ''),
(62, 'section_header', 'tr_62', '', ''),
(63, 'section_header', 'tr_63', '', ''),
(64, 'section_header', 'tr_64', '', ''),
(65, 'section_header', 'tr_65', '', ''),
(66, 'section_header', 'tr_66', '', ''),
(67, 'section_header', 'tr_67', '', ''),
(68, 'section_head', 'tr_68', '', ''),
(69, 'section_head', 'tr_69', '', ''),
(70, 'page_verify', 'tr_70', '', 'Validar E-mail'),
(71, 'page_verify', 'tr_71', '', 'Precisamos validar seu e-mail.'),
(72, 'page_verify', 'tr_72', '', 'Código de validação'),
(73, 'page_verify', 'tr_73', '', 'Digite o código recebido aqui!'),
(74, 'page_verify', 'tr_74', '', 'Enviar'),
(75, 'page_verify', 'tr_75', '', 'Não recebeu?'),
(76, 'page_verify', 'tr_76', '', 'Enviar novamente.'),
(77, 'page_verify', 'tr_77', '', 'Enviamos um código para o seu email. Se não achou o código na caixa principal, veja na caixa de spam...'),
(78, 'section_hero', 'tr_78', 'Do more with your single link in bio', 'Faça mais com<br> o seu <span class=\"text-primary\"><u>único  link</u></span> de bio!'),
(79, 'section_hero', 'tr_79', 'With PopTag you create a beautiful page for your TikTok and Instagram bio in a few easy steps. Drive traffic, track audience growth, sell digital products and secure more business, all in one link!', 'Com a PopTag você cria uma bela página para sua biografia do TikTok e Instagram em algumas etapas fáceis. Impulsione o tráfego, acompanhe o crescimento do público, venda produtos digitais e garanta mais negócios, tudo em um link!'),
(80, 'section_hero', 'tr_80', 'Create Now!', 'Criar Agora!'),
(81, 'section_hero', 'tr_81', 'Demonstration', 'Demonstração');

-- --------------------------------------------------------

--
-- Estrutura para tabela `links`
--

CREATE TABLE `links` (
  `link_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `link_name` varchar(256) NOT NULL,
  `link_type` varchar(32) NOT NULL,
  `link_settings` text DEFAULT NULL,
  `link_is_enabled` tinyint(4) NOT NULL DEFAULT 1,
  `link_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `link_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `links`
--

INSERT INTO `links` (`link_id`, `user_id`, `link_name`, `link_type`, `link_settings`, `link_is_enabled`, `link_created_at`, `link_updated_at`) VALUES
(1, 1, 'gxzqu2k3', 'biolink', NULL, 1, '2024-09-29 18:28:58', '2024-09-29 18:28:58');

-- --------------------------------------------------------

--
-- Estrutura para tabela `link_background`
--

CREATE TABLE `link_background` (
  `background_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `background_type` varchar(50) DEFAULT NULL,
  `background_color_code` varchar(7) DEFAULT NULL,
  `background_color_one` varchar(7) DEFAULT NULL,
  `background_color_two` varchar(7) DEFAULT NULL,
  `background_to_direction` varchar(50) DEFAULT NULL,
  `background_image` varchar(255) DEFAULT NULL,
  `background_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `background_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `link_background`
--

INSERT INTO `link_background` (`background_id`, `link_id`, `background_type`, `background_color_code`, `background_color_one`, `background_color_two`, `background_to_direction`, `background_image`, `background_created_at`, `background_updated_at`) VALUES
(1, 1, 'gradient', 'eight', '#44A08D', '#093637', 'to bottom', NULL, '2024-09-29 18:28:58', '2024-09-29 19:48:54');

-- --------------------------------------------------------

--
-- Estrutura para tabela `link_domain`
--

CREATE TABLE `link_domain` (
  `domain_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `domain_type` tinyint(11) DEFAULT NULL,
  `domain_name` varchar(64) DEFAULT NULL,
  `domain_host` varchar(256) DEFAULT NULL,
  `domain_custom_index_url` varchar(256) DEFAULT NULL,
  `domain_custom_not_found_url` varchar(256) DEFAULT NULL,
  `domain_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `domain_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `link_domain`
--

INSERT INTO `link_domain` (`domain_id`, `link_id`, `domain_type`, `domain_name`, `domain_host`, `domain_custom_index_url`, `domain_custom_not_found_url`, `domain_created_at`, `domain_updated_at`) VALUES
(1, 1, NULL, 'poptag.app', NULL, NULL, NULL, '2024-09-29 18:28:58', '2024-09-29 18:28:58');

-- --------------------------------------------------------

--
-- Estrutura para tabela `link_fonts`
--

CREATE TABLE `link_fonts` (
  `font_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `font_one` varchar(255) DEFAULT NULL,
  `font_two` varchar(255) DEFAULT NULL,
  `font_three` varchar(255) DEFAULT NULL,
  `font_size` int(11) DEFAULT NULL,
  `font_color` varchar(255) DEFAULT NULL,
  `font_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `font_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `link_fonts`
--

INSERT INTO `link_fonts` (`font_id`, `link_id`, `font_one`, `font_two`, `font_three`, `font_size`, `font_color`, `font_created_at`, `font_updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, '2024-09-29 18:28:58', '2024-09-29 18:28:58');

-- --------------------------------------------------------

--
-- Estrutura para tabela `link_seo`
--

CREATE TABLE `link_seo` (
  `seo_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `seo_robots` varchar(255) DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_meta_description` text DEFAULT NULL,
  `seo_meta_keywords` text DEFAULT NULL,
  `seo_favicon` varchar(255) DEFAULT NULL,
  `seo_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `seo_updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `link_seo`
--

INSERT INTO `link_seo` (`seo_id`, `link_id`, `seo_robots`, `seo_title`, `seo_meta_description`, `seo_meta_keywords`, `seo_favicon`, `seo_created_at`, `seo_updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, '2024-09-29 18:28:58', '2024-09-29 18:28:58');

-- --------------------------------------------------------

--
-- Estrutura para tabela `link_themes`
--

CREATE TABLE `link_themes` (
  `theme_id` int(11) NOT NULL,
  `type` varchar(32) NOT NULL,
  `name` varchar(64) NOT NULL,
  `image` varchar(40) DEFAULT NULL,
  `settings` text DEFAULT NULL,
  `is_enabled` tinyint(4) NOT NULL DEFAULT 1,
  `last_datetime` datetime DEFAULT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `link_themes`
--

INSERT INTO `link_themes` (`theme_id`, `type`, `name`, `image`, `settings`, `is_enabled`, `last_datetime`, `datetime`) VALUES
(1, 'solid', 'noir', 'noir-m.jpg', NULL, 1, NULL, '2023-01-23 03:07:00'),
(2, 'solid', 'old rose', 'old-rose-m.jpg', NULL, 1, NULL, '2023-01-23 03:07:00'),
(3, 'solid', 'love', 'love-5-m.jpg', NULL, 1, NULL, '2023-01-23 03:08:11'),
(4, 'solid', 'white lines', 'white-lines-m.jpg', NULL, 1, NULL, '2023-01-23 03:20:50'),
(5, 'solid', 'blue haze', 'blue-haze-m.jpg', NULL, 1, NULL, '2023-01-23 03:20:50'),
(6, 'solid', 'ultraviolet', 'ultraviolet-m.jpg', NULL, 1, NULL, '2023-01-23 03:22:57'),
(7, 'solid', 'voltage', 'voltage-m.jpg', NULL, 1, NULL, '2023-01-23 03:22:57'),
(8, 'solid', 'vouge', 'vouge-light-m.jpg', NULL, 1, NULL, '2023-01-23 03:27:20'),
(9, 'solid', 'alchemy', 'alchemy-m.jpg', NULL, 1, NULL, '2023-01-23 03:27:20'),
(10, 'solid', 'mechanical orange', 'mechanical-orange-m.jpg', NULL, 1, NULL, '2023-01-23 03:27:20'),
(11, 'solid', 'red corp', 'red-corp-m.jpg', NULL, 1, NULL, '2023-01-23 03:27:20'),
(12, 'solid', 'pink door', 'pink-door-m.jpg', NULL, 1, NULL, '2023-01-23 03:27:20'),
(13, 'solid', '3 elements', '3-elements-m.jpg', NULL, 1, NULL, '2023-01-23 03:31:21'),
(14, 'solid', 'black sail', 'black-sail-m.jpg', NULL, 1, NULL, '2023-01-23 03:31:21'),
(15, 'solid', 'lavander', 'lavander-m.jpg', NULL, 1, NULL, '2023-01-23 03:31:21'),
(16, 'solid', 'asphalt street', 'asphalt-street-m.jpg', NULL, 1, NULL, '2023-01-23 03:31:21'),
(17, 'solid', 'naval', 'naval-m.jpg', NULL, 1, NULL, '2023-01-23 03:31:21'),
(18, 'solid', 'scuba', 'scuba-m.jpg', NULL, 1, NULL, '2023-01-23 03:31:21'),
(19, 'solid', 'pink 70s', 'pink-70s-m.jpg', NULL, 1, NULL, '2023-01-23 03:31:21'),
(20, 'solid', 'iron hired', 'iron-hired-m.jpg', NULL, 1, NULL, '2023-01-23 03:31:21'),
(21, 'solid', 'merlot', 'merlot-m.jpg', NULL, 1, NULL, '2023-01-23 03:31:21'),
(22, 'solid', 'writter autum', 'writter-autum-m.jpg', NULL, 1, NULL, '2023-01-23 03:31:21'),
(23, 'solid', '3d glass', '3d-glass-m.jpg', NULL, 1, NULL, '2023-01-23 03:42:23'),
(24, 'solid', 'black tobacco', 'black-tobacco-m.jpg', NULL, 1, NULL, '2023-01-23 03:42:23'),
(25, 'solid', 'layers', 'layers-m.jpg', NULL, 1, NULL, '2023-01-23 03:48:21'),
(26, 'solid', 'hidrogen', 'hidrogen-m.jpg', NULL, 1, NULL, '2023-01-23 03:48:21'),
(27, 'solid', 'old bank', 'old-bank-m.jpg', NULL, 1, NULL, '2023-01-23 03:48:21'),
(28, 'solid', 'plasma', 'plasma-m.jpg', NULL, 1, NULL, '2023-01-23 04:19:30'),
(29, 'solid', 'glory', 'glory-m.jpg', NULL, 1, NULL, '2023-01-23 04:19:30'),
(30, 'solid', 'vouge dark', 'vouge-dark-m.jpg', NULL, 1, NULL, '2023-01-23 04:19:30'),
(31, 'solid', 'camaron', 'camaron-m.jpg', NULL, 1, NULL, '2023-01-23 04:19:30'),
(32, 'solid', 'red faction', 'red-faction-m.jpg', NULL, 1, NULL, '2023-01-23 04:19:30'),
(33, 'solid', 'picanto', 'picanto-m.jpg', NULL, 1, NULL, '2023-01-23 04:19:30'),
(34, 'solid', 'sand navy', 'sand-navy-m.jpg', NULL, 1, NULL, '2023-01-23 04:19:30'),
(35, 'solid', 'kinder', 'kinder-m.jpg', NULL, 1, NULL, '2023-01-23 04:19:30'),
(36, 'solid', 'bakery', 'bakery-m.jpg', NULL, 1, NULL, '2023-01-23 04:19:30'),
(37, 'solid', 'alloy', 'alloy-m.jpg', NULL, 1, NULL, '2023-01-23 04:19:30'),
(38, 'solid', 'punketo', 'punketo-m.jpg', NULL, 1, NULL, '2023-01-23 04:33:14'),
(39, 'solid', 'espresso', 'espresso-m.jpg', NULL, 1, NULL, '2023-01-23 04:33:14'),
(40, 'solid', 'charger', 'charger-m.jpg', NULL, 1, NULL, '2023-01-23 04:33:14'),
(41, 'solid', 'nautic', 'nautic-m.jpg', NULL, 1, NULL, '2023-01-23 04:33:14'),
(42, 'solid', 'northern sailor', 'northern-sailor-m.jpg', NULL, 1, NULL, '2023-01-23 04:33:14'),
(43, 'solid', 'scarlet', 'scarlet-m.jpg', NULL, 1, NULL, '2023-01-23 04:33:14'),
(44, 'solid', 'havanna club', 'havanna-club-m.jpg', NULL, 1, NULL, '2023-01-23 04:33:14'),
(45, 'solid', 'minimal sepia', 'minimal-sepia-m.jpg', NULL, 1, NULL, '2023-01-23 04:33:14'),
(46, 'solid', 'ethanol', 'ethanol-m.jpg', NULL, 1, NULL, '2023-01-23 04:33:14'),
(47, 'solid', 'graft rose', 'graft-rose-m.jpg', NULL, 1, NULL, '2023-01-23 04:41:42'),
(48, 'gradient', 'bronze ore', 'bronze-ore-m.jpg', NULL, 1, NULL, '2023-01-23 17:45:33'),
(49, 'gradient', 'deep turquoise', 'deep-turquoise-m.jpg', NULL, 1, NULL, '2023-01-23 17:45:33'),
(50, 'gradient', 'flow tunnel', 'flow-tunnel-m.jpg', NULL, 1, NULL, '2023-01-23 17:48:06'),
(51, 'gradient', 'medical care', 'medical-care-m.jpg', NULL, 1, NULL, '2023-01-23 17:56:38'),
(52, 'gradient', 'neuf parfum', 'neuf-parfum-m.jpg', NULL, 1, NULL, '2023-01-23 17:56:38'),
(53, 'gradient', 'ny loft', 'ny-loft-m.jpg', NULL, 1, NULL, '2023-01-23 17:56:38'),
(54, 'gradient', 'passion fruit', 'passion-fruit-m.jpg', NULL, 1, NULL, '2023-01-23 17:56:38'),
(55, 'gradient', 'persian carp', 'persian-carp-m.jpg', NULL, 1, NULL, '2023-01-23 17:56:38'),
(56, 'gradient', 'salmon', 'salmon-m.jpg', NULL, 1, NULL, '2023-01-23 17:56:38'),
(57, 'gradient', 'statups', 'statups-m.jpg', NULL, 1, NULL, '2023-01-23 17:56:38'),
(58, 'abstract', 'aborigo', 'aborigo-m.jpg', NULL, 1, NULL, '2023-02-17 01:40:26'),
(59, 'abstract', 'flashnight', 'flashnight-m.jpg', NULL, 1, NULL, '2023-02-17 01:40:26'),
(60, 'abstract', 'magic diamond', 'magic-diamond-m.jpg', NULL, 1, NULL, '2023-02-17 01:40:26'),
(61, 'business & work', 'cyberlock', 'cyberlock-m.jpg', NULL, 1, NULL, '2023-02-17 02:27:48'),
(62, 'business & work', 'grape mustard', 'grape-mustard-m.jpg', NULL, 1, NULL, '2023-02-17 02:27:48'),
(63, 'business & work', 'umbrella', 'umbrella-m.jpg', NULL, 1, NULL, '2023-02-17 02:27:48'),
(64, 'business & work', 'woodspot', 'woodspot-m.jpg', NULL, 1, NULL, '2023-02-17 02:27:48'),
(65, 'landscapes', 'jellyfish', 'jellyfish-m.jpg', NULL, 1, NULL, '2023-02-17 03:06:17'),
(66, 'health & wellness', 'clinique', 'clinique-m.jpg', NULL, 1, NULL, '2023-02-17 03:36:40'),
(67, 'health & wellness', 'the hive', 'the-hive-m.jpg', NULL, 1, NULL, '2023-02-17 03:36:40'),
(68, 'lifestyle', 'crossfit', 'crossfit-m.jpg', NULL, 1, NULL, '2023-02-17 04:27:04'),
(69, 'lifestyle', 'modern traveler', 'modern-traveler-m.jpg', NULL, 1, NULL, '2023-02-17 04:27:04'),
(70, 'people & culture', 'mama pizza', 'mama-pizza-m.jpg', NULL, 1, NULL, '2023-02-17 04:53:28'),
(71, 'technology', 'code 70s', 'code-70s-m.jpg', NULL, 1, NULL, '2023-02-17 04:58:50'),
(72, 'technology', 'endpoints', 'endpoints-m.jpg', NULL, 1, NULL, '2023-02-17 04:58:50'),
(73, 'technology', 'orbit four', 'orbit-four-m.jpg', NULL, 1, NULL, '2023-02-17 04:58:50');

-- --------------------------------------------------------

--
-- Estrutura para tabela `link_track`
--

CREATE TABLE `link_track` (
  `track_id` int(11) NOT NULL,
  `link_id` int(11) DEFAULT NULL,
  `country_code` varchar(8) DEFAULT NULL,
  `city_name` varchar(128) DEFAULT NULL,
  `os_name` varchar(16) DEFAULT NULL,
  `browser_name` varchar(32) DEFAULT NULL,
  `referrer_host` varchar(256) DEFAULT NULL,
  `referrer_path` varchar(1024) DEFAULT NULL,
  `device_type` varchar(16) DEFAULT NULL,
  `browser_language` varchar(16) DEFAULT NULL,
  `utm_source` varchar(128) DEFAULT NULL,
  `utm_medium` varchar(128) DEFAULT NULL,
  `utm_campaign` varchar(128) DEFAULT NULL,
  `utm_id` varchar(128) DEFAULT NULL,
  `utm_term` varchar(128) DEFAULT NULL,
  `utm_content` varchar(128) DEFAULT NULL,
  `utm_url` text DEFAULT NULL,
  `is_unique` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `logs`
--

CREATE TABLE `logs` (
  `log_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `log_type` varchar(64) DEFAULT NULL,
  `ip` varchar(64) DEFAULT NULL,
  `device_type` varchar(16) DEFAULT NULL,
  `os_name` varchar(16) DEFAULT NULL,
  `country_code` varchar(8) DEFAULT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pixels`
--

CREATE TABLE `pixels` (
  `pixel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `link_id` int(11) NOT NULL,
  `pixel_platform` varchar(64) NOT NULL,
  `pixel_name` varchar(64) NOT NULL,
  `pixel` varchar(64) NOT NULL,
  `pixel_note` varchar(255) DEFAULT NULL,
  `pixel_social_media` varchar(64) NOT NULL,
  `pixel_is_enabled` int(1) DEFAULT NULL,
  `pixel_date_time` datetime NOT NULL,
  `pixel_last_date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_name` varchar(64) NOT NULL,
  `project_slug` varchar(64) NOT NULL,
  `project_color` varchar(16) DEFAULT '#000',
  `project_description` varchar(255) DEFAULT NULL,
  `project_is_enabled` int(1) DEFAULT NULL,
  `project_datetime` datetime DEFAULT NULL,
  `project_last_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `qrcodes`
--

CREATE TABLE `qrcodes` (
  `qrcode_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `link_id` int(11) DEFAULT NULL,
  `qrcode_name` varchar(64) NOT NULL,
  `qrcode_type` varchar(32) DEFAULT NULL,
  `qrcode_logo` varchar(64) DEFAULT NULL,
  `qrcode_fields` text DEFAULT NULL,
  `qrcode_image` varchar(64) NOT NULL,
  `qrcode_settings` text DEFAULT NULL,
  `qrcode_is_enabled` int(1) DEFAULT NULL,
  `qrcode_date_time` datetime DEFAULT NULL,
  `qrcode_last_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `recovery_token`
--

CREATE TABLE `recovery_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `start_token` datetime DEFAULT NULL,
  `expiration_token` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `recovery_token`
--

INSERT INTO `recovery_token` (`id`, `email`, `token`, `start_token`, `expiration_token`) VALUES
(1, 'baggitech@gmail.com', '5fd3c754c2826607b6f21154c54b89a3', '2024-09-30 16:32:49', '2024-10-01 16:32:49'),
(2, 'admin@gmail.com', '91086d5e32bdadad50b3a53fb234fcdd', '2024-09-30 14:54:32', '2024-10-01 14:54:32');

-- --------------------------------------------------------

--
-- Estrutura para tabela `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(64) NOT NULL DEFAULT '',
  `value` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'main', '{\"title\":\"Your title\",\"default_language\":\"english\",\"default_timezone\":\"UTC\",\"index_url\":\"https://poptag.app\",\"terms_and_conditions_url\":\"\",\"privacy_policy_url\":\"\",\"not_found_url\":\"\",\"robots\":\"index, follow\",\"default_results_per_page\":25,\"default_order_type\":\"DESC\",\"auto_language_detection_is_enabled\":true,\"blog_is_enabled\":true,\"logo_email\":\"\",\"opengraph\":\"\",\"favicon\":\"favicon.png\",\"canonical\":\"https://poptag.app\",\"base_url\":\"https://poptag.app\"}'),
(2, 'users', '{\"email_confirmation\":false,\"register_is_enabled\":true,\"auto_delete_inactive_users\":0,\"user_deletion_reminder\":0}'),
(3, 'ads', '{\"header\":\"\",\"footer\":\"\",\"header_biolink\":\"\",\"footer_biolink\":\"\"}'),
(4, 'captcha', '{\"type\":\"basic\",\"recaptcha_public_key\":\"\",\"recaptcha_private_key\":\"\",\"login_is_enabled\":0,\"register_is_enabled\":0,\"lost_password_is_enabled\":0,\"resend_activation_is_enabled\":0}'),
(5, 'cron', '{\"key\":\"3e945d756e6ffd26b7c4117ed5af13b3\"}'),
(6, 'email_notifications', '{\"emails\":\"\",\"new_user\":\"0\",\"new_payment\":\"0\"}'),
(7, 'facebook', '{\"is_enabled\":\"0\",\"app_id\":\"\",\"app_secret\":\"\"}'),
(8, 'google', '{\"is_enabled\":\"0\",\"client_id\":\"\",\"client_secret\":\"\"}'),
(9, 'twitter', '{\"is_enabled\":\"0\",\"consumer_api_key\":\"\",\"consumer_api_secret\":\"\"}'),
(10, 'discord', '{\"is_enabled\":\"0\"}'),
(11, 'plan_custom', '{\"plan_id\":\"custom\",\"name\":\"Custom\",\"status\":1}'),
(12, 'plan_free', '{\"plan_id\":\"free\",\"name\":\"Free\",\"days\":null,\"status\":1,\"settings\":{\"additional_global_domains\":true,\"custom_url\":true,\"deep_links\":true,\"no_ads\":true,\"removable_branding\":true,\"custom_branding\":true,\"custom_colored_links\":true,\"statistics\":true,\"custom_backgrounds\":true,\"verified\":true,\"temporary_url_is_enabled\":true,\"seo\":true,\"utm\":true,\"socials\":true,\"fonts\":true,\"password\":true,\"sensitive_content\":true,\"leap_link\":true,\"api_is_enabled\":true,\"affiliate_is_enabled\":true,\"projects_limit\":10,\"pixels_limit\":10,\"biolinks_limit\":15,\"links_limit\":25,\"domains_limit\":1,\"enabled_biolink_blocks\":{\"link\":true,\"text\":true,\"image\":true,\"mail\":true,\"soundcloud\":true,\"spotify\":true,\"youtube\":true,\"twitch\":true,\"vimeo\":true,\"tiktok\":true,\"applemusic\":true,\"tidal\":true,\"anchor\":true,\"twitter_tweet\":true,\"instagram_media\":true,\"rss_feed\":true,\"custom_html\":true,\"vcard\":true,\"image_grid\":true,\"divider\":true}}}'),
(13, 'payment', '{\"is_enabled\":\"0\",\"type\":\"both\",\"brand_name\":\"phpBiolinks\",\"currency\":\"USD\", \"codes_is_enabled\": false}'),
(14, 'paypal', '{\"is_enabled\":\"0\",\"mode\":\"sandbox\",\"client_id\":\"\",\"secret\":\"\"}'),
(15, 'stripe', '{\"is_enabled\":\"0\",\"publishable_key\":\"\",\"secret_key\":\"\",\"webhook_secret\":\"\"}'),
(16, 'offline_payment', '{\"is_enabled\":\"0\",\"instructions\":\"Your offline payment instructions go here..\"}'),
(17, 'coinbase', '{\"is_enabled\":\"0\"}'),
(18, 'payu', '{\"is_enabled\":\"0\"}'),
(19, 'paystack', '{\"is_enabled\":\"0\"}'),
(20, 'razorpay', '{\"is_enabled\":\"0\"}'),
(21, 'mollie', '{\"is_enabled\":\"0\"}'),
(22, 'yookassa', '{\"is_enabled\":\"0\"}'),
(23, 'crypto_com', '{\"is_enabled\":\"0\"}'),
(24, 'paddle', '{\"is_enabled\":\"0\"}'),
(25, 'smtp', '{\"host\":\"\",\"from\":\"\",\"from_name\":\"\",\"encryption\":\"tls\",\"port\":\"587\",\"auth\":\"0\",\"username\":\"\",\"password\":\"\"}'),
(26, 'custom', '{\"head_js\":\"\",\"head_css\":\"\"}'),
(27, 'socials', '{\"facebook\":\"\",\"instagram\":\"\",\"twitter\":\"\",\"youtube\":\"\"}'),
(28, 'announcements', '{\"id\":\"\",\"content\":\"\",\"show_logged_in\":\"\",\"show_logged_out\":\"\"}'),
(29, 'business', '{\"invoice_is_enabled\":\"0\",\"name\":\"\",\"address\":\"\",\"city\":\"\",\"county\":\"\",\"zip\":\"\",\"country\":\"\",\"email\":\"\",\"phone\":\"\",\"tax_type\":\"\",\"tax_id\":\"\",\"custom_key_one\":\"\",\"custom_value_one\":\"\",\"custom_key_two\":\"\",\"custom_value_two\":\"\"}'),
(30, 'webhooks', '{\"user_new\": \"\", \"user_delete\": \"\"}'),
(31, 'cookie_consent', '{}'),
(32, 'links', '{\"branding\":\"by AltumCode\",\"shortener_is_enabled\":true,\"qr_codes_is_enabled\":true,\"biolinks_is_enabled\":true,\"files_is_enabled\":true,\"vcards_is_enabled\":true,\"directory_is_enabled\":true,\"directory_display\":\"verified\",\"domains_is_enabled\":true,\"main_domain_is_enabled\":true,\"blacklisted_domains\":\"\",\"blacklisted_keywords\":\"\",\"google_safe_browsing_is_enabled\":false,\"google_safe_browsing_api_key\":\"\",\"google_static_maps_is_enabled\":false,\"google_static_maps_api_key\":\"\",\"avatar_size_limit\":2,\"background_size_limit\":2,\"favicon_size_limit\":2,\"seo_image_size_limit\":2,\"thumbnail_image_size_limit\":2,\"image_size_limit\":2,\"audio_size_limit\":2,\"video_size_limit\":2,\"file_size_limit\":2,\"product_file_size_limit\":2}'),
(33, 'tools', ''),
(34, 'license', '{\"license\":\"\",\"type\":\"\"}'),
(35, 'product_info', '{\"version\":\"30.2.0\", \"code\":\"3020\"}'),
(36, 'preloader', 'disabled'),
(37, 'theme', '{\"default_theme_style\":\"light\",\"navbar_custom\":\"navbar-dark bg-primary border-0\",\"search_custom\":\"\",\"logo\":\"logo-light.png\",\"logo_sm\":\"logo-light-sm.png\"}'),
(38, 'twitter_og', '{\"card\":\"summary\",\"creator\":\"@PopTag_\",\"site\":\"@PopTag_\",\"domain\":\"poptag.app\",\"title\":\"@PopTag_ | Link na bio grátis e personalizado no Instagram\",\"description\":\"Crie agora o link na bio grátis! Deixe seu link do perfil incrível, personalize como quiser vários links no Instagram, TikTok e WhatsApp em único lugar!\",\"image\":\"ms-icon-144x144.png\"}');

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(320) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `name` varchar(64) NOT NULL,
  `billing` text DEFAULT NULL,
  `api_key` varchar(32) DEFAULT NULL,
  `token` varchar(64) DEFAULT NULL,
  `twofa_secret` varchar(16) DEFAULT NULL,
  `anti_phishing_code` varchar(8) DEFAULT NULL,
  `one_time_login_code` varchar(32) DEFAULT NULL,
  `pending_email` varchar(128) DEFAULT NULL,
  `email_activation_code` varchar(32) DEFAULT NULL,
  `lost_password_code` varchar(32) DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 0,
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `plan_id` varchar(16) NOT NULL DEFAULT '',
  `plan_expiration_date` datetime DEFAULT NULL,
  `plan_settings` text DEFAULT NULL,
  `plan_trial_done` tinyint(4) DEFAULT 0,
  `plan_expiry_reminder` tinyint(4) DEFAULT 0,
  `payment_subscription_id` varchar(64) DEFAULT NULL,
  `payment_processor` varchar(16) DEFAULT NULL,
  `payment_total_amount` float DEFAULT NULL,
  `payment_currency` varchar(4) DEFAULT NULL,
  `referral_key` varchar(32) DEFAULT NULL,
  `referred_by` varchar(32) DEFAULT NULL,
  `referred_by_has_converted` tinyint(4) DEFAULT 0,
  `language` varchar(32) DEFAULT 'english',
  `timezone` varchar(32) DEFAULT 'UTC',
  `ip` varchar(64) DEFAULT NULL,
  `country` varchar(32) DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `last_user_agent` varchar(256) DEFAULT NULL,
  `total_logins` int(11) DEFAULT 0,
  `user_deletion_reminder` tinyint(4) DEFAULT 0,
  `source` varchar(32) DEFAULT 'direct',
  `level` int(11) NOT NULL,
  `code_verify` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `name`, `billing`, `api_key`, `token`, `twofa_secret`, `anti_phishing_code`, `one_time_login_code`, `pending_email`, `email_activation_code`, `lost_password_code`, `type`, `verified`, `plan_id`, `plan_expiration_date`, `plan_settings`, `plan_trial_done`, `plan_expiry_reminder`, `payment_subscription_id`, `payment_processor`, `payment_total_amount`, `payment_currency`, `referral_key`, `referred_by`, `referred_by_has_converted`, `language`, `timezone`, `ip`, `country`, `last_activity`, `last_user_agent`, `total_logins`, `user_deletion_reminder`, `source`, `level`, `code_verify`) VALUES
(1, 'admin@gmail.com', '9b267f64fbfecc6fe57a4e51ebff29ecd3b84c10863a0847279cba076f776e3c', 'AltumCode', NULL, 'cc4c27ae1085ad965050c668c1f7bb7d', 'e5133bc4ed049587807ca18b0f816e6d973acfa7da08b23ed7b27f2e0dc17c4c', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 'custom', '2030-01-01 12:00:00', '{\"additional_global_domains\":true,\"custom_url\":true,\"deep_links\":true,\"no_ads\":true,\"removable_branding\":true,\"custom_branding\":true,\"custom_colored_links\":true,\"statistics\":true,\"qr_is_enabled\":true,\"custom_backgrounds\":true,\"verified\":true,\"temporary_url_is_enabled\":true,\"seo\":true,\"utm\":true,\"fonts\":true,\"password\":true,\"sensitive_content\":true,\"leap_link\":true,\"api_is_enabled\":true,\"affiliate_is_enabled\":true,\"dofollow_is_enabled\":true,\"biolink_blocks_limit\":-1,\"projects_limit\":-1,\"pixels_limit\":-1,\"biolinks_limit\":-1,\"links_limit\":-1,\"domains_limit\":-1,\"track_links_retention\":-1,\"enabled_biolink_blocks\":{\"link\":true,\"heading\":true,\"paragraph\":true,\"avatar\":true,\"image\":true,\"socials\":true,\"mail\":true,\"soundcloud\":true,\"spotify\":true,\"youtube\":true,\"twitch\":true,\"vimeo\":true,\"tiktok\":true,\"applemusic\":true,\"tidal\":true,\"anchor\":true,\"twitter_tweet\":true,\"instagram_media\":true,\"rss_feed\":true,\"custom_html\":true,\"vcard\":true,\"image_grid\":true,\"divider\":true,\"faq\":true,\"discord\":true,\"facebook\":true,\"reddit\":true,\"audio\":true,\"video\":true,\"file\":true,\"countdown\":true,\"cta\":true,\"external_item\":true,\"share\":true,\"youtube_feed\":true}}', 0, 0, NULL, NULL, NULL, NULL, '96f3359c8a43dda4b9ad9bda57f1197f', NULL, 0, 'english', 'UTC', '::1', NULL, '2022-12-05 03:19:27', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 2, 0, 'direct', 3, '604532'),
(34, 'baggitech@gmail.com', '9b267f64fbfecc6fe57a4e51ebff29ecd3b84c10863a0847279cba076f776e3c', 'Lazaro', NULL, NULL, '6821eaf1eff260a860692cfee009dabf1508cffa1470c0ac615607b06f1211db', NULL, NULL, NULL, NULL, NULL, NULL, 0, 1, '', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'english', 'UTC', NULL, NULL, NULL, NULL, 0, 0, 'direct', 1, '713845');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`block_id`);

--
-- Índices de tabela `block_avatar`
--
ALTER TABLE `block_avatar`
  ADD PRIMARY KEY (`avatar_id`);

--
-- Índices de tabela `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`link_id`);

--
-- Índices de tabela `link_background`
--
ALTER TABLE `link_background`
  ADD PRIMARY KEY (`background_id`);

--
-- Índices de tabela `link_domain`
--
ALTER TABLE `link_domain`
  ADD PRIMARY KEY (`domain_id`);

--
-- Índices de tabela `link_fonts`
--
ALTER TABLE `link_fonts`
  ADD PRIMARY KEY (`font_id`);

--
-- Índices de tabela `link_seo`
--
ALTER TABLE `link_seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Índices de tabela `link_themes`
--
ALTER TABLE `link_themes`
  ADD PRIMARY KEY (`theme_id`);

--
-- Índices de tabela `link_track`
--
ALTER TABLE `link_track`
  ADD PRIMARY KEY (`track_id`);

--
-- Índices de tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Índices de tabela `pixels`
--
ALTER TABLE `pixels`
  ADD PRIMARY KEY (`pixel_id`);

--
-- Índices de tabela `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`);

--
-- Índices de tabela `qrcodes`
--
ALTER TABLE `qrcodes`
  ADD PRIMARY KEY (`qrcode_id`);

--
-- Índices de tabela `recovery_token`
--
ALTER TABLE `recovery_token`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `blocks`
--
ALTER TABLE `blocks`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `block_avatar`
--
ALTER TABLE `block_avatar`
  MODIFY `avatar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `links`
--
ALTER TABLE `links`
  MODIFY `link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `link_background`
--
ALTER TABLE `link_background`
  MODIFY `background_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `link_domain`
--
ALTER TABLE `link_domain`
  MODIFY `domain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `link_fonts`
--
ALTER TABLE `link_fonts`
  MODIFY `font_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `link_seo`
--
ALTER TABLE `link_seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `link_themes`
--
ALTER TABLE `link_themes`
  MODIFY `theme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de tabela `link_track`
--
ALTER TABLE `link_track`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `log_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pixels`
--
ALTER TABLE `pixels`
  MODIFY `pixel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `qrcodes`
--
ALTER TABLE `qrcodes`
  MODIFY `qrcode_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `recovery_token`
--
ALTER TABLE `recovery_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
