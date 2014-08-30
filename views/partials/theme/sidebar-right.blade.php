<div class="row">
    <div class="well well-sm">
        <header class="row">
            <h4>IRC Information</h4>
        </header>
        <section>
            <p>To connect to Darchoods IRC network, you can use the following details.</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Hostname</th>
                        <th>Port</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>irc.darchoods.net</td>
                        <td>+6697</td>
                    </tr>
                </tbody>
            </table>

            <div class="row">
                <div class="col-md-4">Like Us!</div>
                <div class="col-md-6"><iframe frameborder="0" allowtransparency="true" style="border:none; overflow:hidden; width:450px; height:21px;" scrolling="no" src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdarchoods.net&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;font=segoe+ui&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=225821644138707"></iframe></div>
            </div>

        </section>
    </div>

    <div class="well well-sm">
        <header class="row">
            <h4>Users in #Darchoods</h4>
        </header>
        <section>
        @if(isset($dhUsers) && count($dhUsers))
            <?php
                $oldHeader = null;
                $dhUsers = array_reverse($dhUsers);
            ?>
            @foreach($dhUsers as $header => $users)
                <?php
                if ($header !== $oldHeader) {
                    echo sprintf('<h5><strong>%s</strong></h5>', $header);
                    $oldHeader = $header;
                }

                if (count($users)) {
                    foreach ($users as $user) {
                        echo profile($user).'<br />';
                    }
                }

                ?>
            @endforeach
        @endif
        </section>
    </div>

</div>
