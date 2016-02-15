<?php

    //$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
    //Table of the most recent transactions
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
                    <div class="box-title">{portfolioOfPlayer}'s Recent Activity</div>
                    <div class="box-content">
                        {activities}
                            <table border="1" width="100%" style="border-collapse: collapse;">
                                <tr>
                                    <td>
                                        {Trans} a {Series} bot piece on {DateTime}
                                    </td>
                                </tr>
                            </table>
                            <br/>
                        {/activities}
                    </div>
                </div>
                    
            </div>


