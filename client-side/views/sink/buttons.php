                                  <tr>
    <th>Buttons</th>
    <td>
        <label>Basic Button</label><br/>
        <button class="btn btn-small">Button</button>
    </td>
</tr>
<tr>
    <th>Dropdown Button</th>
    <td>
        <div class="btn-group pull-right">
            <a class="btn btn-default" id="user-btn" href="#"><i class="icon user"></i> User</a>
            <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="#"><span
                    class="caret"></span></a>

            <div class="dropdown-menu">
                <div id="user-menu-wrapper" style="width: 350px;">
                    <ul class="menu-half">
                        <li><a href="#" id="siv-user-profile"><i class="icon user"></i>&nbsp;My Profile</a>
                        </li>
                        <li><a href="#" id="siv-user-password"><i class="icon lock"></i>&nbsp;Change
                            Password</a></li>
                        <li><a href="#" id="siv-user-location"><i class="icon google_maps"></i>&nbsp;Set
                            Default Location</a></li>
                        <li><a href="#" id="siv-user-mode"><i class="icon magic"></i>&nbsp;Change
                            Mode</a></li>
                        <li><a href="#" id="twine-user-permissions"><i class="icon flag"></i>&nbsp;Notifications</a>
                        </li>
                    </ul>
                    <ul class="menu-half pull-right">
                        <li><a href="#" id="twine-tutorials-btn"><i class="icon circle_info"></i>&nbsp;Tutorials</a>
                        </li>
                        <li><a href="#" id="twine-shortcuts"><i
                                class="icon star"></i>&nbsp;Shortcuts</a></li>
                        <li><a href="#" id="twine-permissions-btn"><i class="icon vcard"></i>&nbsp;Permissions</a>
                        </li>
                    </ul>
                </div>
                <div class="menu-spacer"></div>
                <a id="siv-user-logout" href="#" class="btn btn-default pull-right"
                   style="margin-top: 5px;"><i class="icon exit"></i>&nbsp;Sign Out</a>
            </div>
        </div>
    </td>
</tr>