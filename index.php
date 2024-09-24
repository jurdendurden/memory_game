<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Game</title>
    <link rel="stylesheet" href="styles.css">
</head>
<script src="https://jscolor.com/release/2.4.5/jscolor.js"></script>

<script>
// Here we can adjust defaults for all color pickers on page:
jscolor.presets.default = {
    palette: [
        '#000000', '#7d7d7d', '#870014', '#ec1c23', '#ff7e26', '#fef100', '#22b14b', '#00a1e7', '#3f47cc', '#a349a4',
        '#ffffff', '#c3c3c3', '#b87957', '#feaec9', '#ffc80d', '#eee3af', '#b5e61d', '#99d9ea', '#7092be', '#c8bfe7',
    ],
    //paletteCols: 12,
    //hideOnPaletteClick: true,
    //width: 271,
    //height: 151,
    //position: 'right',
    //previewPosition: 'right',
    //backgroundColor: 'rgba(51,51,51,1)', controlBorderColor: 'rgba(153,153,153,1)', buttonColor: 'rgba(240,240,240,1)',
}
</script>

<body>
    <div id="start_window">
        <div id="background_img"></div>
            <h1><div class="bounce_text">        
                <span style="--i:1">T</span>
                <span style="--i:2">h</span>
                <span style="--i:3">e</span>                
                &nbsp;&nbsp;
                <span style="--i:4">M</span>                            
                <span style="--i:6">e</span>            
                <span style="--i:7">m</span>  
                <span style="--i:8">o</span>            
                <span style="--i:9">r</span>            
                <span style="--i:10">y</span>  
                &nbsp;&nbsp;
                <span style="--i:11">G</span>  
                <span style="--i:12">a</span>            
                <span style="--i:13">m</span>            
                <span style="--i:14">e</span> 

            </h1>
            <div id="color_selection">                
                <h3 class="label">Select Background Color/Style</h3>
                <input data-jscolor="" class="jscolor" value="50AAD1" onchange="select_bg_color(this.jscolor)">
                <button onclick="select_bg_color('pumpkin')">Pumpkin</button>                
                <button onclick="select_bg_color('thanksgiving')">Thanksgiving</button>                
            </div>
                            
            <h3 class="label">Select Game Mode</h3>
                <button onclick="select_mode('limited')">Limited Tries</button>
                <button onclick="select_mode('unlimited')">Unlimited Tries</button>
            <br>
            <div id="theme_selection" style="display:none;">
                <h3 class="label">Select a Theme</h3>
                <button onclick="select_theme('animals')">Animals</button>
                <button onclick="select_theme('automobiles')">Automobiles</button>
                <button onclick="select_theme('christmas')">Christmas</button>
                <button onclick="select_theme('companies')">Companies</button>                
                <button onclick="select_theme('education')">Education</button>
                <button onclick="select_theme('emoji')">Emoji</button>
                <br>
                <button onclick="select_theme('fantasy')">Fantasy</button>
                <button onclick="select_theme('food')">Food</button>                
                <button onclick="select_theme('hotels')">Hotels</button>
                <button onclick="select_theme('halloween')">Halloween</button>
                <button onclick="select_theme('space')">Space</button>
                
            </div>
            <div id="board_size_selection" style="display:none;">
                <h3 class="label">Select Board Size</h3>
                <button onclick="start_game(4)">4x4</button>
                <button onclick="start_game(6)">6x6</button>
                <button onclick="start_game(8)">8x8</button>
            </div>
            
            <br>
            <button onclick="quit_game()">Quit</button>
        
    </div>

    <div id="game_window" style="display:none;">
        <h1><div class="bounce_text">        
            <span style="--i:1">T</span>
            <span style="--i:2">h</span>
            <span style="--i:3">e</span>                
            &nbsp;&nbsp;
            <span style="--i:4">M</span>                            
            <span style="--i:6">e</span>            
            <span style="--i:7">m</span>  
            <span style="--i:8">o</span>            
            <span style="--i:9">r</span>            
            <span style="--i:10">y</span>  
            &nbsp;&nbsp;
            <span style="--i:11">G</span>  
            <span style="--i:12">a</span>            
            <span style="--i:13">m</span>            
            <span style="--i:14">e</span>  

        </h1>
        <div class="label" id="score_display">Score: 0</div>
        <div class="label" id="tries_display" style="margin-top: 10px;">Tries Left: 0</div> 
        <div id="game_board"></div>
        <button onclick="new_game()">New Game</button>
        <button onclick="quit_game()">Quit</button>
    </div>

    <script src="script.js"></script>
</body>
</html>
