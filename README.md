# Web-Game-JS-PHP

- **Navigation Bar (navbar.php)**
    - Links to the home page
    - Changes depending on whether the user is registered, can only see leaderboard, game page and see avatar if registered.

- **Landing Page (index.php)**
    - Prompts the user to log in if not registered, otherwise the user is given a button to press that takes them to game screen.

- **Registration Page (registration.php)**
    - Takes user input and allows the user to pick the complexity level.
    - Also allows user to create their emoji depending on their complexity.

- **Pairs Game (pairs.php)**
    - Button to start the game.
    - Cards are generated and then shuffled.
    - **Simple** 
        - 6 cards, 3 pairs with each card having a card flip effect.
        - Score dependent on attempts.
    - **Medium** 
        - 10 cards, 5 pairs with each card having a card flip effect.
        - Getting a higher score is harder than simple.
        - Score dependent on attempts and time.
    - **Complex** 
        - 3 levels, 
            - First level, 6 cards. 
            - Second level, 12 cards. 
            - Third level, 18 cards.
        - Background of each level turns gold if the user beats their high score.
        - Score dependent on attempts and time.

- **Leaderboard Page (leaderboard.php)**
    - Username and score displayed if the user had submitted their score from the game.
    - Score shows for each level and the total score if complex.
    - Score updates if score is better than last score.

**Important**
The game should be visible at the link below if the VM is turned on, however, if it is not please run the commands below and then click on the link.
The Project files are also available on the Linux VM at /opt/lampp/htdocs/PHPWebGame.

```
sudo service apache2 stop
sudo /opt/lampp/lampp start
```

Link: https://ml-lab-4d78f073-aa49-4f0e-bce2-31e5254052c7.ukwest.cloudapp.azure.com:52087/PHPWebGame/Web-Game-JS-PHP-main/src/php/index.php


