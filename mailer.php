                <form class="uk-form" name="myform" action="http://mailengine.88db.com.ph/" method="POST">
					<div class="uk-form-row">
                        <label class="uk-form-label">Full Name:</label>
                        <div class="uk-form-controls">
                            <input class="cont-form" type="text" name="Name"   required />
                        </div>
                    </div>
					<div class="uk-form-row">
                        <label class="uk-form-label">Address:</label>
                        <div class="uk-form-controls">
                            <input class="cont-form" type="text" name="Address"  required/>
                        </div>
                    </div>
					<div class="uk-form-row">
                        <label class="uk-form-label">E-mail Address:</label>
                        <div class="uk-form-controls">
                            <input class="cont-form" type="text" name="Email"  required/>
                        </div>
                    </div>
					<div class="uk-form-row">
                        <label class="uk-form-label">Contact Number:</label>
                        <div class="uk-form-controls">
                            <input class="cont-form" type="text" name="Phone"  required/>
                        </div>
                    </div>
					<div class="uk-form-row">
                        <label class="uk-form-label">Unit interested in:</label>
                        <div class="uk-form-controls">
                            <!-- <input class="cont-form" type="text" name="Unit"  required/> -->
                             <select class="uk-width-1-1" name="Unit">
							  <option value="STUDIO UNIT (23.92 sm)">STUDIO UNIT (23.92 sm)</option>
							  <option value="ONE BEDROOM UNIT (35.26 sm)">ONE BEDROOM UNIT (35.26 sm)</option>
							  <option value="TWO BEDROOM UNIT W/ BALCONY (51.58 sm)">TWO BEDROOM UNIT W/ BALCONY (51.58 sm)</option>
							  <option value="STUDIO UNIT W/ GARDEN (30.22 sm)">STUDIO UNIT W/ GARDEN (30.22 sm)</option>
							  <option value="ONE BEDROOM UNIT W/ BALCONY (39.74 sm)">ONE BEDROOM UNIT W/ BALCONY (39.74 sm)</option>
							  <option value="TWO BEDROOM UNIT W/ BALCONY (52.34 sm)">TWO BEDROOM UNIT W/ BALCONY (52.34 sm)</option>
							  <option value="STUDIO UNIT (19.9 sm)">STUDIO UNIT (19.9 sm)</option>
							  <option value="ONE BEDROOM UNIT W/ GARDEN (47.86 sm)">ONE BEDROOM UNIT W/ GARDEN (47.86 sm)</option>
							  <option value="TWO BEDROOM UNIT (47.30 sm)">TWO BEDROOM UNIT (47.30 sm)</option>
							  <option value="ONE BEDROOM UNIT (28.81 sm)">ONE BEDROOM UNIT (28.81 sm)</option>
							  <option value="ONE BEDROOM UNIT W/ GARDEN (62.73 sm)">ONE BEDROOM UNIT W/ GARDEN (62.73 sm)</option>
							  <option value="ONE BEDROOM UNIT W/ GARDEN (50.97 sm)">ONE BEDROOM UNIT W/ GARDEN (50.97 sm)</option>
							</select>
                        </div>
                    </div>
					<div class="uk-form-row">
                        <label class="uk-form-label">Subject:</label>
                        <div class="uk-form-controls">
                            <input class="cont-form" type="text" name="Subject" required />
                        </div>
                    </div>
					<div class="uk-form-row">
                        <label class="uk-form-label">Message:</label>
                        <div class="uk-form-controls">
                            <textarea id="" rows="4" class="cont-form" name="Message" required></textarea>
                        </div>
                    </div>
                    <div class="margin30"></div>
                    <button type="submit" class="uk-button contact-btn">Submit</button>

                	<!-- Editable Value Only -->
				    <!-- <input type="hidden" name="Subject" value="Message from Localhost"/> -->
				    <input type="hidden" name="sendTo" value="sales@auroraresidences.com"/> <!-- This is the receipent of the email -->
					
					
				    <input type="hidden" name="ccTo" value=""/>
				    <input type="hidden" name="bcTo" value="emir.e@88db.com.ph"/>
					<!--
					BC and CC
				    <input type="hidden" name="ccTo[]" value=""/>-- if multiple CC add [] in input name else if not Remove the []
				    <input type="hidden" name="ccTo[]" value=""/>
					-->
				    <input type="hidden" name="redirect" value="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"/> <!-- The location after sending the email. -->
					<!-- Editable Value Only -->
				</form>