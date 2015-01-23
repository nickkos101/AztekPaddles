                <div class="screen active">
                    <div class="column half">
                        <h4><b>Body</b> Dimensions</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                            <p class="taligncenter gender">
                                <button class="nobg male"><img src="<?php echo get_template_directory_uri(); ?>/images/male.png"></button>
                                <button class="nobg female"><img src="<?php echo get_template_directory_uri(); ?>/images/female.png"></button>
                                <label>Select Gender</label>
                            </p>
                        </div>
                        <div class="column half taligncenter">
                            <div class="triangle">
                                <div class="toolTipWrap age">
                                    <label>Enter Age <span>(yrs)</span></label>
                                    <input type="text" name="age" readonly class="number" placeholder="00">
                                    <div class="toolTip">
                                        <ul>
                                            <li value="15">&lt; 15 yrs</li>
                                            <li value="16-45">16 - 45 yrs</li>
                                            <li value="46-64">46 - 64 yrs</li>
                                            <li value="65">65 yrs +</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="toolTipWrap height">
                                    <input type="text" name="height" readonly class="number" placeholder="0'00''">
                                    <label>Enter Height <span>(ft,in)</span></label>
                                    <div class="toolTip">
                                        <ul>
                                            <li value="5">&lt; 5' 0"</li>
                                            <li value="54">5' 0" - 5' 4"</li>
                                            <li value="59">5' 5" - 5' 9"</li>
                                            <li value="6">5' 10" - 6' 0"</li>
                                            <li value="64">6' 1" - 6' 4"</li>
                                            <li value="69">6' 5" - 6' 9"</li>
                                            <li value="61">6' 10" +</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="toolTipWrap weight">
                                    <input type="text" name="weight" readonly class="number" placeholder="000">
                                    <label>Enter Weight <span>(lbs)</span></label>
                                    <div class="toolTip">
                                       <ul>
                                        <li value="100">&lt; 100 lbs</li>
                                        <li value="125">101 - 125 lbs</li>
                                        <li value="150">126 - 150 lbs</li>
                                        <li value="180">151 - 180 lbs</li>
                                        <li value="210">181 - 210 lbs</li>
                                        <li value="250">211 - 250 lbs</li>
                                        <li value="251">250 lbs +</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>