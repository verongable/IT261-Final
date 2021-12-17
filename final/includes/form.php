<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <fieldset>
        <label for="full_name">Full Name:</label>
            <input type="text" name="full_name" id="full_name" value="<?php if(isset($_POST['full_name'])) echo htmlspecialchars($_POST['full_name']); ;?>">
            
            <span class="error"><?php echo $full_name_err; ?></span>

        <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ;?>">
            
            <span class="error"><?php echo $email_err; ?></span>

        <label for="phone">Phone Number:</label>
            <input type="tel" name="phone" id="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ;?>">

            <span class="error"><?php echo $phone_err; ?></span>

        <label for="comments">Comments:</label>
            <textarea name="comments" id="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>

            <span class="error"> <?php echo $comments_err; ?></span>

        <label for="tour">Schedule A Property Tour</label>
        <ul>
            <li class="tour1"><input type="checkbox" name="tour[]" id="tour"
            value="onsite"
            <?php if(isset($_POST['tour']) && in_array('onsite', $tour)) echo 'checked="checked"';?>>Onsite Tour</li>

            <li class="tour2"><input type="checkbox" name="tour[]" value="virtual" <?php if(isset($_POST['tour']) && in_array('virtual', $tour)) echo 'checked="checked"';?>>Virtual Tour</li>
        </ul>

        <span class="error"><?php echo $tour_err;?></span>

        <label for="contact_time">Availability:</label>
            <select name="contact_time" id="contact_time">
                <option value="" <?php if(isset($_POST['contact_time']) && $_POST['contact_time'] == NULL) echo 'selected="unselected"';?>>Select Time</option>

                <option value="morning" <?php if(isset($_POST['contact_time']) && $_POST['contact_time'] == 'morning') echo 'selected="selected"';?>>Morning</option>
            
                <option value="afternoon" <?php if(isset($_POST['contact_time']) && $_POST['contact_time'] == 'afternoon') echo 'selected="selected"' ;?>>Afternoon</option>

                <option value="evening" <?php if(isset($_POST['contact_time']) && $_POST['contact_time'] == 'evening') echo 'selected="selected"' ;?>>Evening</option>
            </select>
            <span class="error"><?php echo $contact_time_err; ?></span>

    <label for="privacy">Privacy:</label>
        <ul>
            <li><input type="radio" name="privacy" id="privacy" value="agree" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree') echo 'checked="checked"' ;?>>I agree</li>
        </ul>

        <span class="error">
            <?php echo $privacy_err; ?>
        </span>

        <input type="submit" value="Send">
        <p><a href="" class="reset">Reset</a></p>
    </fieldset>
    </form>