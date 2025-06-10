<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://unpkg.com/htmx.org@2.0.4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary navbar-expand-lg">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="https://lh3.googleusercontent.com/fife/ALs6j_EHvUGrcsdCH0ebPgOWD5UBoBRqeQVbGAMOlZoilj6BjGplxQes-QhLOk0vdNEr89zgAAXwE9z5AVYm2lP7CGw8MqixULMTlK4GhJ6gykd6O1gbUDMhj_PYgBC8jPsV2FObDySCvKnvYHgygXLZ2IWWCOUfFuwja6eo1S6J_EdnTGGlrW1qY5O7pa3aHp5QGy_7YTP83kSo7wmRon5aX3qceJz9vGc5dyfN-iiu24k4quEiFSII8AC3ZmOUf4PgKE245CVavfKSttZ5P76iwcQztGHjhWAYIPTDUn0HqLdGc9F-reXwAmk8uGG5cRA8_TwGIh2Szd5SR287tu-mYpVBFb7_QWIeLXnUss2KhbOw-2IhIIqgC6zMRlM-ZZnBoOmsZcWLWzAAy9Q7OAwo_jWVJXjym_ndzrq4MYtnejZYe2tIDRTY7f_lwlHymhKACUV4MeW2Led_sLtP8S0hyRQCb1gxKrJXEEljws4vgBKOdhz-qh6o_miGGFdGHb2PmP8SdXQs1QLmFKNsWAksItmoQqClG2yneO7-CESlB-g4aYkt4AsB160TanrYU9RCvR16oVoVRe3c7AnEZtF6IIqyYvJvTuYLsJWZgM3G7BMwOogBhNdbHK4wGvNxkZbFPe4szHj7I2quctUAYxKYdsd3CGaw66miRwTdGKFCOcl5J2SZIXt6CSSfBEKV0bvxPsycVYzZHISOS5v8lG_HoGY66KmMXbN9EYTgW7x_4CRXmtQSYTM-TWdh9Dd7yNljISxHCHv0VOScGF_OwXCtDkBCzBpn1yS36gYtVTTEx8RMiVw5tcg0qWVJOawzq9Fbde2lXQBtQUIfeWuGD9WNStsF4_TdFGqN2SK3N5lC39wBKjD2s7zzBETwaGfBBJzgXIKvNv-SFzPnIgpPi8uEmVhlRVnYfrgNZeJX56Y-f24nIkJWhXtVayjDUXhHRdoRd_6GJHy7ffceRmsUrOdlBIlDMrRn3yRGVe0ZUA5xeKZ8wZdyeUlFMknGoFM9mSCQy8K9c2AH_P_9fXW34x46yaemDw2Ss1WhGXyiGpWYoq-Rg-2rJ0q_Hca8ijn04Mta22d-lUdT69jUa9zt3KCUz16_LdkTWsDfjAyuiuftLY6JtMWbfxAgfEIi-kuIQ0mR2wiIFicgFCoKoKFn9R78p6khp89e-5FuD9lupg5k37jrz5SzZQJ3JbvxjdS6ppwJE_njTH8EknibP6lgLXEhcReMCnx0AXtqY2YpWSBoBJoWXrPG-NzgLc90G270DMYEZQ8UjaC84ejqkPpy-S1vGUR5YT9yyipMTBLWc0y4x7p9-ci1tbmf1nqSOFPkxAW_7SwXiMFPiDm6d3RguwNFHM95kddrWZmMjCIFqPo2wakvC-44CJZ3x6rLCbrfQcGatiAKNa0Yq58Xk-_92XrbSXrhAT1ntLaevne9v2Zu4404eCfgUMXiZ5ylkyNvU-xEG6Y8eINW_nITqwu0Igzv4bjfa6QWiSX6gnAdwggSpwGIyn8G8LzoX2GOgAnK8vMP5oj5TNyv5LRhHfEYu9uNlakw9PvpbkQJXQ5zNKmqHBTY_hbqbzn6MhL6TprhWezjex3XEmX4y_c7CMMA_ezeK0Use9r5PixQexsdsA" alt="Bootstrap" width="64" height="64">
              GQuadros Dev
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item pointer" hx-get="/index.php?content=home" hx-target="#main-container" hx-swap="innerHTML">
                <a class="nav-link <?php if(isset($pageTitle) &&$pageTitle === 'Home') echo 'active'; ?>">Home</a>
              </li>
              <li class="nav-item pointer" hx-get="/index.php?content=contato" hx-target="#main-container" hx-swap="innerHTML">
                <a class="nav-link <?php if(isset($pageTitle) && $pageTitle === 'Contato') echo 'active' ?>">Contato</a>
              </li>
              <li class="nav-item pointer" hx-get="/index.php?content=sobre" hx-target="#main-container" hx-swap="innerHTML">
                <a class="nav-link <?php if(isset($pageTitle) && $pageTitle === 'Sobre') echo 'active' ?>">Sobre</a>
              </li>
            </ul>
          </div>
          </div>
        </nav>
    </header>
    <main>
