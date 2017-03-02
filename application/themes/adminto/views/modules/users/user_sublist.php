<?php
    $addurl = 'users/add';
?>

<div class="page_header_block">
    <h2>
        <?php
        if ($user_info->is_super_admin == 3):
            echo "Resellers";
        elseif ($user_info->is_super_admin == 2):
            echo "Clients";
        endif;
        ?>
    </h2>


    <div class="search-block">

        <form action="users/set_session" method="get"> 
            <div class="input-append">
                <?php $selected_data = $this->session->userdata('select_per_page'); ?>
                <select class="span1" name="select_per_page">
                    <option value="20" <?php echo ($selected_data == 20) ? "selected" : "" ?>>20</option>
                    <option value="50" <?php echo ($selected_data == 50) ? "selected" : "" ?>>50</option>
                    <option value="100" <?php echo ($selected_data == 100) ? "selected" : "" ?>>100</option>
                    <option value="150" <?php echo ($selected_data == 150) ? "selected" : "" ?>>150</option>

                </select>
                <button class="btn" type="submit">Go!</button>
        </form>
    </div>
    <a href="<?php echo site_url($addurl); ?>" class="btn btn-primary"><i class="icon-plus icon-white"></i> Add user</a>
    <form class="form-search" method="get" action="">   
        <div class="input-append">
            <input class="span2" id="appendedInputButton" name="s" value="<?php echo $search; ?>" size="16" type="text"/><button class="btn" type="submit">Search</button>
        </div>
    </form>
</div>
</div>


<?php if ($users): ?>
    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>SN</th>
                <?php if ($current_user['is_super_admin'] > 0): ?> <th>Company Name</th> <?php endif; ?>
                <th>Contact Person</th>
                <th>Email</th>
                <th>Username</th>
                <?php if ($current_user['is_super_admin'] != 0): ?> <th>Virtual Number</th> <?php endif; ?>            

                <th>Phone</th>   
                <?php if ($current_user['is_super_admin'] == 1): ?> <th>Role</th> <?php endif; ?>
                <th>Status</th>
                <th>Date Added</th>
                <th style="width:156px"></th>
            </tr>
        </thead>
        <tbody>

            <?php
            $i = 1;
            foreach ($users as $user):
                ?>
                <tr>
                    <td><?php echo $i++; ?>.</td>
                    <?php if ($current_user['is_super_admin'] > 0): ?> 
                        <td><?php echo $user['company']; ?></td> 
                    <?php endif; ?>
                    <td><?php echo $user['name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['username']; ?></td>
                    <?php
                    $num = $user['phone'];
                    if ($num)
                        $phone = '(' . substr($num, 0, 3) . ')' . substr($num, 3, 3) . '-' . substr($num, 6);
                    else
                        $phone = '-';
                    ?>
                    <?php if ($current_user['is_super_admin'] != 0): ?>  <td><?php echo (!isset($user['Sender_id']) || $user->Sender_id == 0 || $user->Sender_id == '') ? "-" : $user->Sender_id; ?></td>  <?php endif; ?>

                    <td><?php echo $phone; ?></td>    
                    <?php if ($current_user['is_super_admin'] == 1): ?>  <td><?php echo ($user['is_super_admin'] == 0) ? 'Client' : 'Reseller'; ?></td><?php endif; ?>
                    <td>
                        <?php
                           echo '<span class="label label-success">Live</span>';
                           /*
                        if ($user->status == 1) {
                            if ($current_user['is_super_admin'] == 2)

                            //echo ($user->trial == 0) ? '<span class="label label-success">Live</span>' : '<span class="label label-important">Trial</span>';
                                if ($user->trial == 0) {
                                    echo '<span class="label label-success">Live</span>';
                                } else {
                                    $trial_start_date = strtotime($user->date_of_registration);
                                    if (strtotime(date('Y-m-d H:i:s')) > strtotime('+7 days', $trial_start_date)) {
                                        echo '<span class="label label-important">Expired</span>';
                                    } else {
                                        echo '<span class="label label-important">Trial</span>';
                                    }
                                }
                            else
                                echo '<span class="label label-success">Live</span>';
                        }elseif($user->status == 2){
                            echo '<span class="label">De-activate</span>';
                        }
                        else {
                            echo '<span class="label">Suspend</span>';
                        }
                        */
                        ?>
                    </td>
                    <td><?php echo change_date_format('m-d-Y g:i A', $user['date_created']); ?></td>
                    <td>


                        <div class="btn-group">
                            <div class="btn-group">

                                <a href="<?php echo site_url('account/login_as_client/' . $user['user_id']); ?>" title="login as <?php echo $user['username']; ?>" class="btn loginas"> <i class="icon icon-lock"></i> Login as</a> 

                                <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                    Action
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu  pull-left" style="min-width: 96px; margin-right: 25px;">
                                    <?php if ($user_info->is_super_admin == 3 AND $user['is_super_admin'] > 0): ?>
                                        <li><a href="<?php echo site_url('users/view/' . $user['company_id']) ?>" title="View Resellers"><i class="icon-user"></i> View</a></li>
                                    <?php endif; ?>
                                    <li><a href="<?php echo site_url('users/edit/' . $user['company_id']) ?>" title="Edit"><i class="icon-edit"></i> Edit</a></li>
                                    <li> <a  href="<?php echo site_url('users/delete/' . $user['company_id']) ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this user?');"><i class="icon-trash"></i> Delete</a></li>
                                </ul>

                            </div>                      
                    </td> 
                </tr>
            <?php endforeach; ?>

        </tbody>

    </table>
    <?php
    if (isset($pagination)) {
        echo $pagination;
    }
    ?>

<?php else: ?>
    <div class="alert alert-error">
        <button class="close" data-dismiss="alert">&times;</button>
        User not found
    </div> 

<?php endif; ?>


<script>
    $('.loginas').live('click',function(e){
        
        var as = $(this).attr('title');
        if(!confirm('You will be logged out from your account and '+as))
        {
            return false;
        }
    })
</script>