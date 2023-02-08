<?php
$title="Karimeen Pollichathu";
$ingrediants=[
    "2 nos Pearl spot Karimeen ( Green chromide )",
    "1 cup Small onion (chopped) Kunjulli",
    "2 nos Tomato small",
    "Ginger garlic paste - 1 tsp",
    "2 nos Green chillies",
    "Curry leaves A few",
    "1/2 tsp Chilly powder",
    "1/2 tsp Coriander powder",
    "1/4 tsp Turmeric powder",
    "Salt As required",
    "Coconut milk (optional)",
    "1 tbsp Oil",
];
$steps=[
    "Clean fish and make cuts on it.",
    "Mix pepper powder and salt, apply to the fish and keep for half an hour.",
    "Pour 1 tsp of oil in a fry pan and shallow fry the fish turning both sides. Keep aside.",
    "Heat 1 tbsp of oil in a kadai.",
    "Saute chopped small onions.",
    "When brown, add green chillies, curry leaves and ginger-garlic paste and saute again till its cooked.",
    "Add coriander, chilly powder, turmeric powder and saute well.",
    "Add chopped tomatoes and mix well till its cooked.",
    "Add salt and mix well.",
    "Add 1 tbsp of water and mix well.",
    "You can use cocount milk instead of water for a better taste.",
    "Divide it into 4 portions.",
    "Take a banana leaf and gently heat it to make soft.",
    "Keep one portion of the saute mixture on the leaf, keep the fried fish on top of it and spread one portion of the saute on the top of the fish.",
    "Cover the fish with the leaf and tie with a thread.",
    "Do the same with the second fish.",
    "Keep the fish in a kadai and close it with a lid.",
    "Cook it on a slow fire for 10 mins and gently turn it over and cook the other side.",
    "Serve Karimeen Pollichathu hot with chappathis or rice.",
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title><?php echo $title ?></title>
</head>
<body>
    <header>
    <div class="title">
    <h1><?php echo $title ?></h1></div>
    </header>
    <h2><u>Ingrediants</u></h2>
    <ul>
        <?php foreach($ingrediants as $ingrediant): ?> 
            <li><?php echo $ingrediant ?></li>
            <?php endforeach ?>
    </ul><br>
    <h2><u>Steps</u></h2>
    <ol>
        <?php foreach($steps as $step): ?>
        <li><?php echo $step ?></li>
        <?php endforeach ?>
    </ol>

    <br><br><br>Source: <a href="https://www.pachakam.com/recipes/kerala-karimeen-pollichathu">Pachakam.com</a>
</body>
</html>