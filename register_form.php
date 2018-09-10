<!doctype html>

<html>

<head>
  <meta charset="utf-utf-8" />

  <title>Assignment #2</title>

  <!--This is the link to the CSS Stylesheet-->
  <link rel='stylesheet' href='./css/style.css' />
  <!--This link contains the Google web font link that is used by this website-->
  <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro:400,600" rel="stylesheet" />
  <script type='text/javascript' src='./scripts/scripts.js'></script>
</head>

<body>
  <!--The entire form, header info and main content section are wrapped in a div to ensure that the background of the form stretches to fill the entire browser frame from top to bottom (vertically)-->
  <div id='background_fill'>
    <div id='main_wrapper'>
      <header id='title_info' class='text_align_object'>
        <h1>Assignment #2</h1>
        <h3>Please enter your data using the following forms:</h3>
      </header>

      <!--Form is wrapped in a section tag-->
      <section>

        <!--Input objects are all contained within this single form tag-->
        <form action='./register_form_handle.php' method='POST' id='main_form' class='text_align_object' onsubmit='accepted()'>
          <fieldset>
            <legend>User Information</legend>
            <!--This is a text field input-->
            <div class='text_div'>
              <label for="text_field" class='input_label'>Full name:</label>
              <input type='text' size='20' maxlength='40' name='text_field' id='name_field' placeholder='Your name here' required autofocus title='Enter your name here' autocomplete pattern='[A-Za-z]{2,20}' />
            </div>

            <!--This is a password field input-->
            <div class='text_div'>
              <label for="password_field" class='input_label'>Password field:</label>
              <input type='password' size='20' maxlength='20' name='password_field' id='password_field' placeholder='Enter password here' required autofocus title='Please enter your password here' autocomplete pattern='[A-Za-z]{2,20}' />
            </div>

            <!--This is a textarea field input (text box)-->
            <div class='text_div'>
              <label for="textarea_field" class='input_label'>Comments:</label>
              <textarea name='textarea_field' rows='8' cols='42' placeholder='Enter text block here...' required autofocus title='Please enter a long block of text here'></textarea>
            </div>

            <!--TThis is a collection of radio button inputs and their labels-->
            <div class='ul_region'>
              <label for="radio_buttons_field" class='ul_label'>Radio buttons field:</label>
              <ul>
                <!--First radio option-->
                <li>
                  <div>
                    <input type='radio' name='radiobuttons_field' id='first_radio' value='First radio button' checked='checked' />
                    <label for="first_radio">First radio button</label>
                  </div>
                </li>
                <!--Second radio option-->
                <li>
                  <div>
                    <input type='radio' name='radiobuttons_field' id='second_radio' value='Second radio button' />
                    <label for="second_radio">Second radio button</label>
                  </div>
                </li>
                <!--Third radio option-->
                <li>
                  <div>
                    <input type='radio' name='radiobuttons_field' id='third_radio' value='Third radio button' />
                    <label for="third_radio">Third radio button</label>
                  </div>
                </li>
              </ul>
            </div>

            <!--This is a collection of three checkbox button inputs and their labels-->
            <div class='ul_region'>
              <label for="checkbox_buttons_field" class='ul_label'>Checkbox buttons field:</label>
              <ul>
                <!--First checkbox option-->
                <li>
                  <input type='checkbox' name='checkbox_buttons_field[]' id='first_checkbox' value='First checkbox button' checked='checked' />
                  <label for="first_checkbox">First checkbox button</label>
                </li>
                <!--Second checkbox option-->
                <li>
                  <input type='checkbox' name='checkbox_buttons_field[]' id='second_checkbox' value='Second checkbox button' />
                  <label for="second_checkbox">Second checkbox button</label>
                </li>
                <!--Third checkbox option-->
                <li>
                  <input type='checkbox' name='checkbox_buttons_field[]' id='third_checkbox' value='Third checkbox button' />
                  <label for="third_checkbox">Third checkbox button</label>
                </li>
              </ul>
            </div>

            <!--This is a drop-down menu with two groups of three options each-->
            <div id='pull_down_menu_div'>
              <label for='pull_down_menu_field'>Select an Option:</label>
              <select name='pull_down_menu_field' id='pull_down_menu_field' size='1' >
              	<optgroup label='Option 1'>
              		<option value="Option_1_A" selected='selected'>Option 1-A</option>
              		<option value="Option_1_B">Option_1_B</option>
              		<option value="Option_1_C">Option_1_C</option>
              	</optgroup>

              	<optgroup label='Option 2'>
              		<option value="Option_2_A">Option_2_A</option>
              		<option value="Option_2_B">Option_2_B</option>
              		<option value="Option_2_C">Option_2_C</option>
              	</optgroup>
              </select>
            </div>

            <!--This is fieldset input with three radio buttons-->
            <div>
              <fieldset>
                <legend id='form_title_legend'>Radio button fieldset</legend>

                <div>
                  <input type='radio' name='radio_fieldset' id='radio_fieldset_option_1' value='option 1' checked='checked' />
                  <label for='radio_fieldset_option_1'>Option #1</label>
                </div>

                <div>
                  <input type='radio' name='radio_fieldset' id='radio_fieldset_option_2' value='option 2' />
                  <label for='radio_fieldset_option_2'>Option #2</label>
                </div>

                <div>
                  <input type='radio' name='radio_fieldset' id='radio_fieldset_option_3' value='option 3' />
                  <label for='radio_fieldset_option_3'>Option #3</label>
                </div>

              </fieldset>
            </div>

            <!--These are the submit and reset button inputs-->
            <div>
              <input type='submit' name='submit_button' id='submit_button' value='Click to submit!' />
              <input type='reset' name='reset_button' id='reset_button' value='Click to reset!' />
            </div>
          </fieldset>
        </form>
      </section>


      <!--Footer contains ficticious copyright information-->
      <footer id='footer_info' class='text_align_object'>
        <hr>
        <h4><small>&copy; 2018 by Keith Smith</small></h4>
      </footer>
    </div>
  </div>

</body>

</html>
