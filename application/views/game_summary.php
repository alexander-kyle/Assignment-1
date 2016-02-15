<?php

    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    //This is a table that displays the bot information for the homepage
    //
    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    ?>

<style type="text/css">  
        .Contents {
		
		width: auto;
                height: 100%;
                
                
                
	}
        
       
        div#box {   
            margin-left: auto;
            margin-right: auto;
            width: 45%;
        }
        
        div#box .box-title {
            color: #fff;
            text-shadow: 0px 0px 1px #ddd;
            background-color: #3fb0ac;
            padding: 5px;
        }
        div#box .box-content {
            padding: 80px;
            background-color: #f6f1ed;
            border: solid #ccc;
        }
        
</style>
                
            <div class="Contents">
                    
                <div id="box">
                    <div class="box-title">Players</div>
                    <div class="box-content">
                        {summary}

                            The Series {Series} are the {Description}. A complete set of these bots are worth {Value}. 
                            <br/>


                        {/summary}
                    </div>
                </div>
                    
            </div>

