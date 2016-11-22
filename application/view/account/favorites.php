<div class="container" id="main-alt">
    <div class="col-lg-12 text-center">
        <div class="page-subtitle-container">
            <h2>Favorites</h2>
        </div>
        <?php
        $count = 0;
        foreach ($favorites as $query) {
            ?>
            <div class="listing-container">
                <div class="listing-price"><?php if (isset($query->rent)) echo '$' . htmlspecialchars($query->rent, ENT_QUOTES, 'UTF-8'); ?></div>
                <?php
                if (isset($query->thumbnail)) {
                    echo "<img src='data:image/jpeg;base64," . base64_encode($query->thumbnail)
                    . "' alt='Item image' class='thumbnail' height='300px'>";
                }
                ?>
                <div class="listing-preview">
                    <h4><a href="#" target="_blank"><?php if (isset($query->title)) echo htmlspecialchars($query->title, ENT_QUOTES, 'UTF-8'); ?></a></h4>
                    <p><?php if (isset($query->type)) echo htmlspecialchars($query->type, ENT_QUOTES, 'UTF-8'); ?> -
                        <?php
                        if (isset($query->beds)) {
                            if ($query->beds == 1) {
                                echo htmlspecialchars($query->beds, ENT_QUOTES, 'UTF-8');
                                echo " Bedroom";
                            } else {
                                echo htmlspecialchars($query->beds, ENT_QUOTES, 'UTF-8') + "<p>Bedrooms</p>";
                                echo " Bedrooms";
                            }
                        }
                        ?></p>
                    <p><?php if (isset($query->zipcode)) echo htmlspecialchars($query->zipcode, ENT_QUOTES, 'UTF-8'); ?></p>
                    <p style="font-size: 16px; color: #333!important;"><?php
                        if (isset($query->date_created)) {
                            if ($query->date_created < time()) {
                                echo "Available Now";
                            } else {
                                echo "Available on " . $query->date_created;
                            }
                        }
                        ?></p>
                    <p><?php
                        if (isset($query->pets)) {
                            if ($query->pets == 1) {
                                echo "<img src='" . URL . "img/Dog-50.png' title='pets' width='25' class='listing-icons'>";
                            }
                        }
                        if (isset($query->smoking)) {
                            if ($query->smoking == 1) {
                                echo "<img src='" . URL . "img/Smoking-50.png' title='smoking' width='25' class='listing-icons'>";
                            }
                        }
                        if (isset($query->laundry)) {
                            if ($query->laundry == 1) {
                                echo "<img src='" . URL . "img/Washing Machine-50.png' title='laundry' width='25' class='listing-icons'>";
                            }
                        }
                        if (isset($query->parking)) {
                            if ($query->parking == 1) {
                                echo "<img src='" . URL . "img/Parking-50.png' title='parking' width='25' class='listing-icons'>";
                            }
                        }
                        if (isset($query->furnished)) {
                            if ($query->furnished == 1) {
                                echo "<img src='" . URL . "img/Sofa-50.png' title='furnished' width='25' class='listing-icons'>";
                            }
                        }
                        ?>
                    </p>
                    <p><?php
                        if (isset($query->date_created)) {
                            echo "Posted on ";
                            echo htmlspecialchars(date("m-d-Y", strtotime($query->date_created)), ENT_QUOTES, 'UTF-8');
                        }
                        ?>
                    </p>

                    <?php if (empty($_SESSION)) { ?>
                        <a href="#signup" onclick="document.getElementById('popup-signup').style.display = 'block'"><button class="listing-message-btn">Message Lister</button></a>
                    <?php } ?>
                    <?php if (!empty($_SESSION)) { ?>

                        <div class="form-group">
                            <a href="#message" onclick="document.getElementById('popup-message').style.display = 'block'"><button class="listing-message-btn">Message Lister</button></a>
                        </div>
                    <?php } ?>                     
                </div>
            </div>
            <?php
            $count++;
        }
        ?>
    </div>
</div>