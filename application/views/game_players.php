  <?php

    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    //This is a table that displays the people playing the game for the homepage
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
        .table{
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            width: 75%;
            border-collapse: collapse;
        }
        
</style>
                
            <div class="Contents">
                    
                <div id="box">
                    <div class="box-title">Players</div>
                    <div class="box-content">
                        {gamers}
                            <table class="table">
                                <tr>
                                    <td><a href="/portfolio/index/{Player}">{Player}:</a><br /></td>

                                    <td>Peanuts - {Peanuts},</td>
                                    <td>Equity - {Equity}</td>
                                </tr>
                            </table>
                        {/gamers}
                    </div>
                </div>
                    
            </div>




