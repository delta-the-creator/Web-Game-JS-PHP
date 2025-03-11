

$(document).ready(function(){

    let $attempts = 0;
    let $score = 100;
    let $checking = false;
    let flipped_cards = [];

    function update_score(){
        $score = $score - ($attempts * 2)
        if ($score < 0){
            $score = 0;
        }
        $('.scoreboard p').html('Score: ' + $score);
    };

    function final_score() {
        let $points = 0;
        if ($attempts < 10) {
            $points = 50;
        } else if ($attempts < 20) {
            $points = 25;
        } else {
            $points = 0;
        }
        $score = $score + $points;
        $(".scoreboard p").html('Score: ' + $score);
    };

    function check_win(){
        var allmatched = true;

        $(".game-card").each(function(){
            if (!$(this).hasClass("matched")){
                allmatched = false;
                return false;
            }
        });

        if (allmatched) {
            final_score();
        } else {
            return false;
        }
    };

    function display_cards() {
        $('#game-square').removeClass('hidden');
    };

    $(document).on('click','.game-card', function(){
        if ( $checking || $(this).hasClass('flipped') || $(this).hasClass('matched')){
            return;
        }

        $(this).addClass('flipped');
        flipped_cards.push($(this));

        if (flipped_cards.length === 2 ) {
            $checking = true;
            setTimeout(check_cards, 500);

        } else {
            $checking = false;
        }
    })

    $('#remove-button').on('click', function(){
        $('#remove-button').remove();
        display_cards();
    })

    function check_cards() {
        var first_card = flipped_cards[0];
        var second_card = flipped_cards[1];

        if (flipped_cards.length === 2) {

            $attempts++;
            update_score();

            var first_cardimg = {
                skin: first_card.find('.back .skin').attr('src'),
                mouth: first_card.find('.back .mouth').attr('src'),
                eyes: first_card.find('.back .eyes').attr('src')
            }
            var second_cardimg = {
                skin: second_card.find('.back .skin').attr('src'),
                mouth: second_card.find('.back .mouth').attr('src'),
                eyes: second_card.find('.back .eyes').attr('src')
            }

            if (first_cardimg.skin === second_cardimg.skin && 
                first_cardimg.mouth === second_cardimg.mouth &&
                first_cardimg.eyes === second_cardimg.eyes) {
                    console.log("Match Found");
                    first_card.addClass('matched');
                    second_card.addClass('matched');
                    check_win();
            } else {
                console.log("No Match");
                setTimeout(() => {
                    first_card.removeClass('flipped');
                    second_card.removeClass('flipped');
                }, 500);
            }
        }
        flipped_cards = [];
        $checking = false; 
    }

    function shuffle(array) {
        for (let i = array.length - 1; i >= 0; i--){
            const j = Math.floor(Math.random() * (i + 1));
            [array[i],array[j]] = [array[j], array[i]];
        }
        return array;
    }
    
    var shuffled = shuffle($("#game-board").children().toArray());
    $("#game-board").empty().append(shuffled);
});