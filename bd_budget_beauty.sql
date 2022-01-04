-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 08:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_budget_beauty`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `user_id` int(30) DEFAULT NULL,
  `cart_id` int(50) NOT NULL,
  `Product_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(200) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `amount` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`user_id`, `cart_id`, `Product_Name`, `price`, `date`, `amount`) VALUES
(1, 300, ' EVELINE SELFIE TIME 2 IN 1 COVERING FOUNDATION  ', 850, '2022-01-04 18:43:52', 850),
(1, 301, ' EVELINE SELFIE TIME 2 IN 1 COVERING FOUNDATION  ', 850, '2022-01-04 18:44:22', 850),
(1, 302, ' EVELINE SELFIE TIME 2 IN 1 COVERING FOUNDATION  ', 850, '2022-01-04 18:59:46', 850),
(1, 303, ' EVELINE SELFIE TIME 2 IN 1 COVERING FOUNDATION  ', 850, '2022-01-04 19:22:32', 850),
(1, 304, ' GOSH DEXTREME HIGH COVERAGE POWDER ', 1650, '2022-01-04 20:33:06', 1650),
(3, 305, ' EVELINE ART MAKE-UP ANTI SHINE COMPLEX PRESSED POWDER  ', 850, '2022-01-04 20:34:29', 850),
(2, 306, 'BIELENDA BOTANIC FORMULA L HEMP OIL MOISTURIZING CREAM   ', 1850, '2022-01-04 21:05:56', 1850),
(6, 307, ' BIELENDA SMOOTHY CREAM PREBIOTIC CREAMY FOAM FACE WASH  ', 850, '2022-01-04 21:27:45', 850),
(1, 308, ' EVELINE SELFIE TIME 2 IN 1 COVERING FOUNDATION  ', 850, '2022-01-04 22:28:12', 850);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(20) NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Suntan Removal & Brightening'),
(2, 'Acne'),
(3, 'Oil Control'),
(4, 'Dryness');

-- --------------------------------------------------------

--
-- Table structure for table `makeup_brands`
--

CREATE TABLE `makeup_brands` (
  `brand_id` int(10) NOT NULL,
  `brandName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `makeup_brands`
--

INSERT INTO `makeup_brands` (`brand_id`, `brandName`) VALUES
(1, 'Eveline'),
(2, 'Gosh'),
(3, 'Bielenda'),
(4, 'Rude'),
(5, 'Lee stafford');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(30) NOT NULL,
  `amount` int(30) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(20) NOT NULL,
  `Product_Name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Price` int(20) DEFAULT NULL,
  `Description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Product_Name`, `Price`, `Description`) VALUES
(1, 'EVELINE SELFIE TIME 2 IN 1 COVERING FOUNDATION-05', 850, 'Eveline Cosmetics Selfie Time is a Modern Foundation and Concealer 2 in 1 is a cosmetic with concealing properties that combines the effects of Fluid and Concealer. It allows gradation of coverage and, like the concealer, perfectly hides all types of skin imperfections (shadows, discolorations, redness), without a mask effect. Incredibly light texture adapts to the skin, ensuring a long-lasting effect. The addition of hyaluronic acid, moisturizing ingredients and vitamin E perfectly moisturizes the skin and adds shine. The innovative matting complex contained in the formula prevents shine and reduces the visibility of the pores - the skin acquires smoothness, acquires a perfect look, ready to do SELFIE. Anti-Pollution formula. Suitable for the type of skin or as a make-up base.'),
(2, 'EVELINE SELFIE TIME 2 IN 1 OVERING FOUNDATION-06', 850, 'Eveline Cosmetics Selfie Time is a Modern Foundation and Concealer 2 in 1 is a cosmetic with concealing properties that combines the effects of Fluid and Concealer. It allows gradation of coverage and, like the concealer, perfectly hides all types of skin imperfections (shadows, discolorations, redness), without a mask effect. Incredibly light texture adapts to the skin, ensuring a long-lasting effect. The addition of hyaluronic acid, moisturizing ingredients and vitamin E perfectly moisturizes the skin and adds shine. The innovative matting complex contained in the formula prevents shine and reduces the visibility of the pores - the skin acquires smoothness, acquires a perfect look, ready to do SELFIE. Anti-Pollution formula. Suitable for the type of skin or as a make-up base.'),
(3, 'EVELINE SATIN MATT 4IN 1 COVERING FOUNDATION 104', 850, 'This foundation has silky consistency combining the possibility of coverage gradation with the comfort of use. The foundation evens skin surface, minimizing visibility of pores  and hiding imperfections. Formula, rich in snail slime filtrate, blends with the complexion, firms, and provides ideal coverage without the mask-like effect. Innovative MOIST & VITAL COMPLEX moisturizes the skin, eliminating symptoms of fatigue.'),
(4, 'EVELINE UNICORN MAKEUP PREMER BEAUTY SERUM', 1550, 'An innovative product created by Eveline that delivers beauty and care all at the same time. A liquid solution that works both as a Serum and Primer. Unicorn magic drops have a formula with hyaluronic acid, Goji extract and Acai, which effectively moisturize and firm the skin. Thanks to the content of vegetable Collagen and Agave extract, it improves the tone and density of the skin. '),
(5, 'EVELINE SATIN MATT 4IN 1 COVERING FOUNDATION 103', 850, 'This foundation has silky consistency combining the possibility of coverage gradation with the comfort of use. The foundation evens skin surface, minimizing visibility of pores  and hiding imperfections. Formula, rich in snail slime filtrate, blends with the complexion, firms, and provides ideal coverage without the mask-like effect. Innovative MOIST & VITAL COMPLEX moisturizes the skin, eliminating symptoms of fatigue.'),
(6, 'EVELINE NEOMANIA 12 COLORS EYESHADOW', 1550, 'The palette of 12 eyeshadows is a joyful, multi-colored choice for women who are eager for unconventional makeup! Let summer be on your eyelids! What look will you choose for yourself? easy application and blending, the palette will allow you to draw colorful lines, create mono and colored Smokey makeup. \r\n\r\nPerfect pigmentation allows the intensity of the shadows to be graded, so you can easily create a delicate make-up. Light formula and matte and satin finish will allow you to conjure up a wonderful look!'),
(7, 'EVELINE EYELINER LEQUID PRECISION BLACK MATT', 650, 'Waterproof matte black Liquid eyeliner. Perfect for emphasizing and finishing the eye make-up. Created on the basis of a special two-phase formula, it stays on the skin all day, without smudging. In addition, it has an innovative, conical applicator that facilitates the drawing of perfect lines. The product can be lightly rubbed to obtain a smoky eye effect. Available in a shade of matt black.'),
(8, 'EVELINE WONDER MATCH RICE LOOSE POWDER', 1350, 'A classic loose powder just like the ingredient that it is made out of. It gives the skin a radiant and healthy appearance. It has been created in such a manner that it is perfect for all skin types. The package contains a handy box. - Packaging with a practical can of vegan formula!'),
(9, 'EVELINE LATEX FREE MAGIC BLENDER', 1050, 'Makeup sponge Magic Blender recommended by makeup artists. It has a unique shape that allows for precise application of cosmetics. The point ended part of the sponge is used to apply the concealer, while the flat parts are used to distribute cosmetics around the eyes and nose. Latex free.'),
(10, 'EVELINE EYESHADOW PALETTE 9 COLORS SPARKLE', 1850, 'The perfect composition of silky matte and intensely shiny, highly pigmented shadows, which will conjure up stunning eye makeup in both a delicate and more bold version. The unique formula allows for perfect application and blending, while ensuring durability throughout the day. Closed in a special, impressive package, from which you can not take your eyes off.'),
(11, 'EVELINE VARIETE 18 COLORS EYESHADOW PALETTE', 1950, 'Variete eyeshadow palette by Eveline Cosmetics has been created on the basis of inspiration from the world of theatre. It consists of 18 pressed powders with different finishes such as matte, metallic and pearl. The original color palette includes various variations on shades of beige, brown, gold, navy blue and green, which allows you to create an infinite amount of makeup for both everyday look and glamorous look. Strong and long lasting pigmentation combined with a non-flaking formula significantly increases the comfort of work.\r\n\r\nAt the same time, the powders blend easily which allows to create a personalized original look. To show the elegance of the palette the outer case has been given priority. The set was closed in an extremely elegant and richly decorated golden leather.\r\n\r\n'),
(12, 'EVELINE NEON 8 COLORS EYESHADOW PALETTE', 1250, 'The palette of 8 neon shadows guarantees perfect mono or colored smokey makeup. Wonderful pigmentation will provide you with a clearly visible emphasis on the eyes, and the more delicate use of shadows will create subtler makeup.\r\n\r\nThe Neon Lights palette is also a light formula of shadows and a matte finish. The set includes a practical, double-sided applicator. Wonderful, juicy colors of the rainbow in your eyelid!'),
(13, 'GOSH ANTI POLLUTION CONDITIONER', 1550, 'ANTI-POLLUTION CONDITIONER gently moisturizes hair. Filled with Panthenol and CITYGUARD+ that protects against external pollutants, removes roughness from hair and adds moisture.'),
(14, 'GOSH MACADEMIA OIL NOURISHING OIL', 1550, 'GOSH Macadamia Oil Nourishing Hair Oil is a light and non-greasy oil that can be used for all hair types. This oil is enriched with macadamia oil, and only a few drops extend far. It makes a very dry hair softer and more compassionate, and can even help tame a wrinkled and unruly hair. If you are into a light oil that quickly absorbs your hair without leaving your hair glued, GOSH Macadamia Oil Nourishing Hair Oil is the right one.'),
(15, 'GOSH EYE LINER 005(NUDE)', 850, 'This fantastic eye liner ensures a fine spreading of the colour pigments. The pencil is very easy to work with and gives a nice-looking application'),
(16, 'GOSH LIP OIL CHERRY BLOSSOM', 1250, 'GOSH Lip Oil - 005 Cherry Blossom is a pleasing lip gloss in a transparent pink color. This lip gloss provides perfectly worn, damp lips with a natural but refined glossy look. Here you will have beauty in the raw Nordic wellness in a super-blend shade. You can apply this lip gloss over your favorite lipstick for a more intense and nutritious result.'),
(17, 'GOSH HIGH COVERAGE CONCEALER -002', 1490, 'Concealer â€“ High Coverage is a must-have in any makeup bag, and liquid concealer is the most versatile type to use. From camouflaging acne to erasing dark under-eye circles and even highlighting, liquid concealer is hard to beat when it comes to performance. By choosing the best shade for the skin, blending with the right tools and allowing the concealer to set, it is possible to put the best face forward. It is easily concealing imperfections and glides over signs of fatigue. Fill in fine lines and correct colour differences while keeping skin hydrated, with this easy to apply concealer, creating a radiant complexion.'),
(18, 'GOSH ANTI POLLUTION SHAMPOO', 1550, 'ANTI-POLLUTION SHAMPOO gently cleanses hair and scalp. Filled with Panthenol and CITYGUARD+ that protects against external pollutants, removes residues from hair and adds moisture.'),
(19, 'GOSH PUMP UP VOLUME CONDITIONER', 1550, 'This is the Gosh Professional Hair Care Pump Up The Volume Conditioner and it\'s an innovative conditioner containing proteins and also adds volume and fluffiness to your hair. At the same time, it renews the flexibility and vitality of your hair.'),
(20, 'GOSH COCONUT MOISTURIZING HAIR OIL', 1550, 'Coconut hair oil with a deep regenerating effect (rebuilds, softens, stops splitting ends). The unique formula contains coconut oil and Abyssinian oil. Provides excellent smoothing and regeneration of damaged and dry hair. In addition, it allows to model curly and unruly strands. Light, non-greasy consistency is easy to apply. Enriched with coconut oil and abyssinian oil, this product promises to keep your hair soft while showing off a natural shine.'),
(21, 'GOSH COCONUT OIL SHAMPOO', 1550, 'Coconut Oil Shampoo gently cleans all types of hair. With the mixture of natural coconut oil, keratin protein, wheat protein and Pro-Vitamin B5, this shampoo repairs split ends, revitalises, nourishes and moisturises the hair and scalp, also when used daily. The hair gets a beautiful smooth and shiny look and is left with a soft and gentle scent of coconut.'),
(22, 'GOSH 2 PHASE EYE MAKEUP REMOVER', 1850, 'GOSH DONODERM 2PHASE EYE MAKEUP REMOVER gently and effectively removes waterproof and other types of eye makeup from the eyes and lips. It has a fresh, lightweight texture and leaves no oily traces on the skin. The formula contains Allantoin that has a calming effect on the skin and Provitamin B5 that increase the hydration and improve softness and elasticity. '),
(23, 'GOSH VITAMIN BOOSTER SHAMPOO', 1550, 'GOSH Shampoo Vitamin Booster is a nourishing shampoo that can be used for all hair types, but is especially good for a normal or damaged hair. \r\n\r\nVitamin B3 or Niacin is a water-soluble nutrient and a B-complex which plays a significant part in hair growth. Niacin, though is very effective on hair, but is not much known or celebrated like its other B-complex fellows. It helps to transport blood and oxygen to the scalp and hair follicles.\r\n\r\nVitamin B5 is a water-soluble vitamin from the B group of vitamins. It helps produce energy by breaking down fats and carbohydrates. It also promotes healthy hair. \r\n\r\nVitamin E may help support a healthy scalp and hair as it has natural antioxidant effects that could assist with maintaining hair growth.'),
(24, 'GOSH VITAMIN BOOSTER CLEANSING CONDITIONER', 1250, 'Vitamin booster cleansing conditioner enriched with active ingredients, which is responsible for the gentle cleansing effect.'),
(25, 'EVELINE C SENSATION PURE VITALITY WATER', 1950, 'Micellar Water removes make-up, even waterproof make-up with a single movement. The product perfectly cleanses and refreshes the skin.\r\nJapanese Yuzu Citrus Extract moisturizes, regenerates and brightens the skin, giving it a natural glow.\r\nilluminates the skin and supports the regulation of sebum secretion\r\nIts Really Good for oily and combination.'),
(26, 'EVELINE GLYCOL THERAPY AGAINST IMPERFECTION', 1550, 'It minimizes enlarged pores and reduces all types of imperfections, restoring skin\'s vitality and natural glow. The formula has been enriched with active ingredients such as 5% AHA (glycolic and lactic acids), rice water and panthenol. The product is vegan friendly and has not been tested on animals. It was placed in a 110 ml bottle.'),
(27, 'EVELINE LOOK DELICIOUS FACE BIO MASK WATERMELON', 250, 'Cleansing bio masks with peeling will help in the fight against imperfections. The fruity formula will brighten yours.\r\n\r\nThe watermelon and peeling contained in the mask formula deeply cleanses. Lemon leaves the complexion refreshed and radiant. The mask moisturizes and improves skin tone!'),
(28, 'EVELINE LOOK DELICIOUS FACE BIO MASK ORGANIC', 250, 'Peeling mask\r\nSmoothes, nourishes and cleans\r\nSachet for two applications\r\nAppetizing and effective active ingredients\r\nUnique fragrance\r\nSuitable for vegans'),
(29, 'EVELINE EXTRA SOFT WHITENING FACE&BODY CREAM', 900, 'Dermatologist swiss recipe lightens face and body.\r\nReduction of pigmentation spots and discolorations.\r\nEffectively protects skin from sun rays.\r\nImprovement and balancing of skin color.\r\nFreshness, softness, soothing of the skin.\r\nPerfectly absorbing formula and non-sticky.\r\n24 hour moisturization and protection.\r\nRefreshment and calming of the skin.\r\nAvocado oil - nourishes and deeply regenerates.\r\nUnique ingredients provide maximum moisturization.\r\nUVA/UVB FILTERS for every skin type'),
(30, 'EVELINE HYALURON MOISTURIZING ESSENCE HYDRATOR', 1650, 'The Eveline Cosmetics Hyaluron Clinic face essence is a product full of active ingredients, meaning it provides absolutely luxurious care for your skin. Hydrator is the excellent make-up primer and extends its durability. Light, silky consistency can also be used during the day - perfectly refreshes, moisturizes and adds radiance to the skin, without damaging the make-up.'),
(31, 'EVELINE BIO BURDOCK THERAPY BIOACTIVE SHAMPOO', 1000, 'Burdock therapy cleanses your hair and scalp gently yet thoroughly. Burdock shampoo combined with other natural ingredients penetrates deep into the structure of hair fibers and strengthens hair bulbs to prevent premature hair loss and promote hair growth. Thanks to its nourishing and anti-inflammatory properties, burdock oil effectively repairs the keratin layer of your hair, restores the hydro-lipid balance to the scalp, and normalizes the function of sebaceous glands, as well as eliminates dandruff and has a soothing effect. Horsetail Extract, which is famous for its nourishing properties, provides deep nourishment and helps rebuild hair structure, leaving your hair silky smooth, soft and radiant. It protects hair from high temperatures, damage and harmful UV exposure.'),
(32, 'EVELINE FACEMED SERUM AGAINST IMPERFECTIONS', 1550, 'MULTIFUNCTION SERUM AGAINST IMPERFECTIONS is the new generation program recommended for any skin type, especially damaged, rough, with uneven tone. Innovative formula, rich in lactobionic acid 3% and mandelic acid 1%, gently exfoliates, reduces skin lesions, ensuring visible renewal of epidermis just after 1st application.\r\nHyaluronic acid intensely smoothens and actively moisturizes, reinforcing protective barrier and restoring balance to problematic skin. Thanks to Micro-Peel-Active Technology unique technology the serum deeply regenerates skin during sleep, when the strategic repair processes occur.'),
(33, 'EVELINE COSMETICS EYE PADS ICE COOLING COMPRESS', 500, '3 IN 1 COOLING HYDROGEL EYE COMPOUNDS: The special formula will eliminate the effects of a sleepless night. The active ingredients will reduce dark circles under the eyes and will give you an instant cooling effect. It will eliminate fine swellings and wrinkles. The skin will stay smooth! '),
(34, 'EVELINE 3 IN 1 GOLD ILLUMINATING COMPRESS', 500, 'The illuminating eye compress in the form of hydrogel pads will remove signs of fatigue and give your eyes a full glow. Perfect to use before the big show or whenever just your skin under the eyes needs glow. The formula with filtered snail mucus, baicalin and collagen strongly moisturizes, perfectly smoothes and brightens the shadows under the eyes. '),
(35, 'EVELINE UNICORN GLOW MOISTURIZING PURIFYING MASK', 450, 'No more boring daily skincare for you. Bring out the joy of skincare with the new Unicorn Peel-Off Mask by Eveline! With precious ingredients that cleanse and moisturize the skin and gives a radiant glow. Unique moon dust gives the skin a unique glow. This colorful shimmering hologram mask by Eveline Cosmetics will take you to a carefree and colorful world of magic and give your skin an extraordinary dose of positive energy that you need from your daily life.'),
(36, 'EVELINE COSMETICS GLYCOL THERAPY ENZYMATIC PEELING', 1650, 'GLYCOL THERAPY 2% - Oil Enzematic Peeling by EVELINE COSMETICS. Oil enzyme peeling regulates cell renewal of the epidermis, minimizes the visibility of acne traces and scars, fights inflammation on the skin. Effectively exfoliates dead skin, reduces wrinkles and eliminates any imperfections. Accelerates skin regeneration and evens its color. The advanced peeling formula owes its extraordinary effectiveness to a two-phase cleansing effect. The oils dissolve makeup residues and impurities, while AHA acids exfoliate dead cells. It soothes and prevents dryness and nourishes the skin.'),
(37, 'BIELENDA BOTANICAL CLAYS VEGAN SERUM BOOSTER', 1650, 'VEGAN SERUM BOOSTER with a rich texture for everyday care of demanding dry, dehydrated and sensitive skin. A plant formula combines PINK CLAY and ACAI BERRIES, which ensures optimal hydration and detoxification of the skin, supports its regeneration and nourishment.'),
(38, 'BIELENDA SKIN CLINIC PROFESSIONAL ACTIVE SERUM', 1650, 'Active Skin Brightening Serum effectively improves the quality of skin troubled by visible discolorations and capillaries, grey, tired, exhibiting loss of elasticity following overexposure to the sun.\r\nReduces pigmentation  lightens discoloration and scars, reduces visibility of capillaries and dark spots resulting from sun exposure and ageing of the skin.\r\nAnti-pollution properties protect the skin from negative effects of environmental pollution and UV rays.\r\nAntioxidant properties  slows down ageing processes of the skin, smooths wrinkles, regenerates and firms the skin damaged due to long term sun exposure. Moisturizes, reduces greyness, illuminates.'),
(39, 'BIELENDA DR MEDICA ACNE FACE CREAM', 1650, 'Brightens discolorations.\r\nVisibly tightens the pores.\r\nLightens blemishes, soothes acne.\r\nIntense moisturizes and soothes the skin.\r\nMattes, reduces oiliness and skin shining.\r\nReduces acne and the formation of new pimples.\r\nSignificantly reduces the appearance of pore size.\r\nNormalizes the sebaceous glands, narrows and cleans pores.\r\nMoisturizes skin dried due to the anti-acne treatments.\r\nDermatological, anti-acne cream contains developed formula.\r\n'),
(40, 'BIELENDA SKIN CLINIC PROFESSIONAL FACE SERUM', 1650, 'Maximum 100% concentrated dose of HYALURONIC ACID.\r\nPowerful 24 h hydration.\r\nSoothing skin after aesthetic medicine treatments.\r\nActively hydrating serum effectively boosts quality of the skin.\r\nImproves firmness, elasticity, moisture, texture and color.\r\nEffectively inhibits the emergence of wrinkles.\r\nQuickly heals the skin after aesthetic medicine treatments.\r\nPerfectly smoothens the skin and imparts radiance.\r\nExtremely powerful and long-lasting hydration to the skin.\r\nEffectively hydrates the skin and normalizes the exfoliation process.'),
(41, 'BIELENDA SKIN CLINIC FACE SERUM', 850, 'Lightens discolorations.\r\nReduces pores and skin shine.\r\nActs as an antibacterial agent.\r\nImproves its resistance to damage.\r\nStrengthens, renews and mattes the skin.\r\nStimulates repair mechanisms of the skin.\r\nPrevents clogging of pores, lightens discolorations.\r\nPrevents breakouts, smooths and evens skin, moisturizes.\r\nImproves the quality of skin prone to imperfections.\r\nShrinks pores, reduces excessive sebum production.\r\nGently exfoliates, effectively reduces skin shine and pores.\r\nReduces wrinkles, smooths, improves hydration.\r\nSerum contains the maximum dose of highly active ingredients.'),
(42, 'BIELENDA BOTANICAL CLAYS VEGAN CREAM PINK', 990, 'The cream visibly improves the appearance and condition of the skin. It strengthens, tones and softens the epidermis, eliminates the uncomfortable, unpleasant feeling of tightness and burning of the skin, makes it soft, smooth and velvety to the touch. Evens out skin tone, adds radiant glow, soothes, softens, helps reduce redness and other imperfections.'),
(43, 'BIELENDA BLUEBERRY C-TOX MOISTURIZING AND BRIGHTEN', 1650, 'The serum optimally moisturizes dry epidermis.\r\nEliminates the feeling of tightness and discomfort.\r\nIt makes the skin look better, is smooth, radiant and full of glow.\r\nIt is an excellent first step in the care of dull to dehydrated skin.\r\nLight, YOGHURT FORMULA serum does not burden the skin.\r\nAbsorbs quickly and perfectly spreads.\r\nWe will not mention the insane smell and pleasure of use, you will definitely find out for yourself!'),
(44, 'BEALENDA BEAUTY MILKY CREAMY SHOWER AND BATH', 2350, 'Vegan creamy bath and shower almond milk with a prebiotic is an ideal way to cleanse, relax and unwind the skin every day. The milk cleans effectively, it is gentle on the skin, refreshes it, does not irritate it, leaves it regenerated, beautifully scented, smooth and soft to the touch.\r\n\r\nIt contains carefully selected, natural active ingredients:\r\n\r\ncontains 97% ingredients of natural origin * has a vegan formula * protects the skin microbiome * makes it addictive with its fragrance and pleasure to use.\r\nalmond milk - composition of almond oil and seed extract, shows properties supporting nutrition and hydration of the epidermis.\r\nprebiotics -  substances that stimulate the development of a healthy bacterial flora. '),
(45, 'BIELENDA BLACK SUGAR DETOX MOISTURIZING FACE SERUM', 1650, 'Black Sugar Detox is an effective line of cosmetics for the care of combination and oily skin based on the innovative combination of sugar and carbon that provides the skin with a strong detox cleansing the skin of toxins and optimal hydration. Rich innovative recipes are based on cane sugar and activated carbon.'),
(46, 'BIELENDA BLUEBERRY C-TOX MOISTURIZING AND BRIGHTEN', 1550, 'SUPERFOOD FOR YOUR SKIN - Our CREAM is a real cocktail of precious active ingredients. We mixed in it: AMERICAN BLUEBERRY SEED OIL - cold pressed, unrefined, formed as a by-product from the production of juices (nothing is wasted and we get the full-fledged ingredient #super #lesswaste), has antioxidant, moisturizing and nourishing properties, this is unquestionable #superfood for your skin.'),
(47, 'BIELENDA NEURO GLICOL EXFOLIATING SERUM', 1850, 'The spectacular effects of skin renewal are guaranteed by intelligent active ingredients with proven efficacy and precise action that penetrate deeply and gradually release their power, working long after application.'),
(48, 'BIELENDA BLUEBERRY C-TOX BRITHTENING FACE WASH', 1200, 'Super fluffy MUSU FORMULA gently but effective.\r\nEffectively cleanses impurities and excess sebum.\r\nEffect of purity, freshness, satin softness and smooth skin.\r\nPerfectly prepares the complexion for further care.\r\nWe will not mention the insane smell and pleasure of use, you will definitely find out for yourself!\r\nIt does not dry it, does not download and does not cause discomfort.'),
(49, 'GOSH DEXTREME HIGH COVERAGE POWDER', 1650, '\r\nDEXTREME - HIGH COVERAGE POWDER stays in place all day. The pressed powder formula has an ultra-smooth, silky texture and glides on effortlessly for superior coverage. It improves skin clarity, reduces the appearance of pores and controls shine. It ensures flawless makeup all day without spots or shiny areas. Ideal for setting makeup. Don\'t let your makeup give up halfway through the day.'),
(50, 'RUDE- STAR PARTY LIQUID EYESHADOW - SOLSTICE', 1250, '\r\nCreate impacting looks with star party long lastingÂ shimmer. As a liquid liner, brush applicator makes easy to create and control lines. Consistency makes it suitable as eyeshadow. Blend right away. Fine shimmers add a full pop of shine to your look'),
(51, 'GOSH HIGH COVERAGE CONCEALER POWDER', 1490, '\r\nConcealer  High Coverage is a must-have in any makeup bag, and liquid concealer is the most versatile type to use. From camouflaging acne to erasing dark under-eye circles and even highlighting, liquid concealer is hard to beat when it comes to performance. By choosing the best shade for the skin, blending with the right tools and allowing the concealer to set, it is possible to put the best face forward. It is easily concealing imperfections and glides over signs of fatigue. Fill in fine lines and correct colour differences while keeping skin hydrated, with this easy to apply concealer, creating a radiant complexion.'),
(52, 'EVELINE ART MAKE-UP ANTI SHINE COMPLEX PRESSED POW', 850, '\r\nMATTIFYING MINERAL FACE POWDER.\r\nIt provides a silky-matt finish.\r\nHides small imperfections and discoloration.\r\nIt has a velvet formula that provides an easy application.\r\nSoft and velvety texture.\r\nSuitable for all skin types.\r\nCruelty Free, Vegan.\r\nShade Name: 33 Golden Sand.'),
(53, 'BIELENDA SMOOTHY CREAM PREBIOTIC CREAMY FOAM FACE ', 1250, '\r\nFluffy creamy foam energizing face wash.\r\nDeeply cleanses skin impurities and gives fresh looking skin.\r\nBanana & Melon extract moisturizes, smoothes.\r\nRegeneration of the epidermis, restores its proper pH.\r\nEffect of purity, freshness, satin softness and smoothing.\r\nPerfectly prepares the skin for further care.\r\nMoisturizing and refreshing melon extract. \r\nIt does not dry skin and does not cause discomfort.\r\nCream and Mask from the SMOOTHIE line.\r\nIt completes the Comprehensive Energy Care.\r\nDesigned for washing and cleaning gray, tired and dry skin.'),
(54, 'RUDE- STAR PARTY LIQUID EYESHADOW - SHE\'S A STAR', 1250, 'Create impacting looks with star party long lastingÂ shimmer. As a liquid liner, brush applicator makes easy to create and control lines. Consistency makes it suitable as eyeshadow. Blend right away. Fine shimmers add a full pop of shine to your look.'),
(55, 'RUDE STAR PARTY LIQUID EYESHADOW- FALLING STAR', 1250, 'Create impacting looks with star party long lastingÂ shimmer. As a liquid liner, brush applicator makes easy to create and control lines. Consistency makes it suitable as eyeshadow. Blend right away. Fine shimmers add a full pop of shine to your look.'),
(56, 'EVELINE BIO BURDOCK THERAPY BIOACTIVE SHAMPOO', 1000, 'Burdock therapy cleanses your hair and scalp gently yet thoroughly. Burdock shampoo combined with other natural ingredients penetrates deep into the structure of hair fibers and strengthens hair bulbs to prevent premature hair loss and promote hair growth. Thanks to its nourishing and anti-inflammatory properties, burdock oil effectively repairs the keratin layer of your hair, restores the hydro-lipid balance to the scalp, and normalizes the function of sebaceous glands, as well as eliminates dandruff and has a soothing effect. Horsetail Extract, which is famous for its nourishing properties, provides deep nourishment and helps rebuild hair structure, leaving your hair silky smooth, soft and radiant. It protects hair from high temperatures, damage and harmful UV exposure.'),
(57, 'CIATE LONDON THE EDITOR PALETTE', 4500, 'Presenting four dazzling eyeshadow palettes inspired by dreamy holiday destinations! Each 18-piece palette contains pigment-rich, buttery smooth mattes and sparkling metallics encased in a slick case with a mega mirror for easy applications. Each shadow has an efficacious and utterly desirable finish - from buttery formulas that allows you to gently blend, for a totally seamless finish, to shimmering shadows that take you effortlessly from deskside-chic to disco-glam.'),
(58, 'EVELINE VELVET MATT LIPSTICK NO. 511', 690, 'The lipstick applies perfectly on the lips and additionally, thanks to the content of specially selected ingredients and vitamin E, nourishes and cares for them. The content of mineral oil and lanolin forms a subtle film on the lips which smoothes them and regenerates.'),
(59, 'BIELENDA BLUEBERRY C-TOX MOISTURIZING & BRIGHTENIN', 250, 'Our mask is a real cocktail of precious active ingredients. We mixed in it:\r\nHere is the vegan SMOOTHIE mask with an appetizing consistency in the #foodie style with real blueberry seeds, designed for daily care of dehydrated and dull skin.\r\n-AMERICAN BLUEBERRY SEED OIL - cold pressed, unrefined, formed as a by-product of juice production (nothing is wasted and we get the full-fledged ingredient #super #lesswaste), has antioxidant, moisturizing and nourishing properties, this is the unquestioned #superfood for your skin .'),
(60, 'EVELINE CONTOUR STROBING SENSATION 4 PALETTE', 1550, 'HIGHLIGHTER PALETTE by EVELINE. Highlighter palette. It consists of 4 pressed products with flecks. It is perfect for cheekbone tops, nose, cupid\'s bow, forehead or under the eyebrow arch. The product can also be applied to collarbones, cleavage or tan. The whole set was closed in a handy package, ideal for travel.'),
(61, 'RUDE STAR PARTY LIQUID EYESHADOW GALACTIC VOYAGE', 1250, 'Create impacting looks with star party long lastingÂ shimmer. As a liquid liner, brush applicator makes easy to create and control lines. Consistency makes it suitable as eyeshadow. Blend right away. Fine shimmers add a full pop of shine to your look.'),
(62, 'GOSH DEXTREME FULL COVERAGE FOUNDATION', 1950, 'GOSH Dextreme Full Coverage Foundation is a wonderful liquid foundation that covers all your impurities, pores and imperfections. The texture of this foundation is easy to control and blends naturally into the skin, giving you a long-lasting and flawless look throughout the day. It is especially good for normal or oily skin as it gives a matte satin finish that makes your skin look healthy and gives you a perfect and uniform skin, providing the ultimate and best foundation for the rest of your skin.');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(50) NOT NULL,
  `first_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` int(11) NOT NULL,
  `pass` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `first_name`, `last_name`, `email`, `phone_no`, `pass`) VALUES
(1, 'Jalal', 'Ahmed', 'jalalahmed@gmail.com', 1982223456, '12345'),
(2, 'Ela', 'Rahman', 'elarahman@gmail.com', 1972229456, '12345'),
(3, 'Rana', 'Islam', 'rana@gmail.com', 1687223459, '1234'),
(4, 'Sourav ', 'Islam', 'sourav@gmail.com', 1788883456, '12345'),
(6, 'Rakibul', 'Islam', 'rakib@gmail.com', 1786223496, '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makeup_brands`
--
ALTER TABLE `makeup_brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
