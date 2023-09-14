<?php
error_reporting(0);
ob_start();
session_start();
include"config.php";

if(!$_SESSION["sess_user_name"])
{
	
}



?>
												<h4>Returning Customer</h4>
												<p>I am a returning customer</p>
                                                <div id="error"></div>
												<div>
													<fieldset>
														<div class="control-group">
															<label class="control-label">Username</label>
															<div class="controls">
																<input type="text" placeholder="Enter your username" id="username" class="input-xlarge">
															</div>
														</div>
														<div class="control-group">
															<label class="control-label">Password</label>
															<div class="controls">
															<input type="password" placeholder="Enter your password" id="password" class="input-xlarge">
															</div>
														</div>
														<button class="btn btn-inverse" onClick="login_user()">Continue</button>
													</fieldset>
												</div>
											