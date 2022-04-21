<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title></title>
  </head>
  <body>
<input type="text" readonly="" id="password" />
    <div id="meter">
      <div id="meter-color" style="width: 100%"></div>
        </div>
          </div>
            <a class="nbtn rbtn" id="generatepw">Generate</a>
               </div>
          <form autocomplete="off" id="pwform" _lpchecked="1">
                    <h3>Password Length:</h3>
                    <input
                      type="text"
                      name="length"
                      id="length"
                      maxlength="3"
                    />
                    <h3>Password Formula:</h3>
                    <div id="pw-formula" class="line-box">
                      <label
                        ><input
                          type="radio"
                          name="pw-type"
                          checked=""
                          id="reqevery"
                        />All Characters</label
                      ><br /><label
                        ><input
                          type="radio"
                          name="pw-type"
                          id="pronounceable"
                        />Easy to Say</label
                      ><br /><label
                        ><input
                          type="radio"
                          name="pw-type"
                          id="ambig"
                        />Easy to Read</label
                      ><br /><label
                        ><input
                          type="checkbox"
                          checked=""
                          name="pw-char"
                          id="upper"
                        />A-Z</label
                      ><label
                        ><input
                          type="checkbox"
                          checked=""
                          name="pw-char"
                          id="lower"
                        />a-z</label
                      ><label
                        ><input
                          type="checkbox"
                          checked=""
                          name="pw-char"
                          id="digits"
                        />0-9</label
                      ><label
                        ><input
                          type="checkbox"
                          checked=""
                          name="pw-char"
                          id="special"
                        />!$%@#</label
                      ><br /><label
                        ><input
                          type="text"
                          style="width: 50px"
                          maxlength="3"
                          id="mindigits"
                        />Minimum Numeric Characters</label
                      ><br />
                    </div>
                    <h3
                      id="error-msg"
                      style="
                        color: rgb(211, 45, 39);
                        margin-top: 15px;
                        display: none;
                      "
                    >
                      Please do not let your minimum numeric characters exceed
                      your password length.<br />
                    </h3>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/passgen.js"></script>
    <script src="js/sjcl.js"></script>
  </body>
</html>
