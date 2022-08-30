<?php defined('BASEPATH') OR exit('No direct script access allowed');


                echo'
                    <div class="clearfix"></div> 
                </div>
                <div class="divide40"></div>
                <div class="divide40"></div>
                <h4>Student Activity History:</h4><hr>
                <div class="ibox">
                <div class="ibox-title"><h4> Details(all operations (mean, mode, median are done in ascending order) </h4>
                   
                        <a href="'.site_url('Main/index').'" data-toggle="tooltip" data-placement="bottom" 
                            title="" data-original-title="Add New Item">
                            <button type="button" class=" btn rounded-pill btn btn-primary rounded">
                            
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        <span><strong>Add</strong></span>  
                        </button>
                        

                        </a>  
                         
                        
                            
                        </a>         
                   
                    </div>             
                </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>S/N</th>
                                <th>Name</th>
                                <th>Government</th>
                                <th>Mathematics</th>
                                <th>Physics</th>
                                <th>Chemistry</th>
                                <th>English</th>
                                <th>Mean</th>
                                <th>Median</th>
                                <th>Mode</th>
                                <th>dATE</th>
                               
                            </tr>
                        </thead>
                        <tbody>';
                    if (empty($workflow_history)){
                        echo'<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
                    }else {
                     
                        foreach($workflow_history as $k =>$history) {
                         // var_dump($history);
                        // die();
                            echo'        
                            <tr>
                            <td>'.$history->student_id.'</td>
                              <td>'.$history->firstname.'<br/>('.$history->lastname.')</td>
                              <td>'.$history->Government.'</td>
                              <td>'.$history->Mathematics.'</td>
                              <td>'.$history->Physics.'</td>
                              <td>'.$history->Chemistry.'</td>
                              <td>'.$history->English.'</td>
                              <td>'.$history->mean.'</td>
                              <td>'.$history->median.'</td>
                              <td>'.$history->mode.'</td>
                              <td>'.date("M j, Y", strtotime($history->date_added)).'<br/>'
                                .date("g:i A", strtotime($history->date_added)).'</td>

                            </tr>';
                        }
                    }
                    echo'
                        </tbody>
                    </table>
                </div>
            </div>
        
    </div>            
    ';
