<section class="login-form-wrap">
  <h1><img src="Group 1.svg" alt="Alexia Logo" style="width: 150px; height: auto;"></h1>
  <form class="login-form" method="GET" action="login.php">
    <label>
      <input type="email" name="emri" required placeholder="Email">
    </label>
    <label>
      <input type="password" name="pasi" required placeholder="Password">
    </label>
    <input type="submit" value="Kyçuni">
  </form>
  <h5>Nuk jeni regjistruar? 
    <br>
    Ju lutem<a href="formaeregjistrimit.php"> Regjistrohuni</a></h5>
</section>
<style>
* {
  box-sizing: border-box;
}

html {
  background: #e2e2e2;
}

body {
  background: #e2e2e2;
  margin: 0;
  padding: 0;
  font-family: "Lato", sans-serif;
}

.login-form-wrap {
  background: radial-gradient(
    ellipse at center,
    rgba(81, 112, 173, 1) 0%,
    rgba(53, 84, 147, 1) 100%
  );
  border: 1px solid #2d416d;
  box-shadow: 0 1px #5670a4 inset, 0 0 10px 5px rgba(0, 0, 0, 0.1);
  border-radius: 5px;
  width: 360px;
  margin: 60px auto;
  padding: 50px 30px 0 30px;
  text-align: center;

  h1 {
    margin: 0 0 50px 0;
    padding: 0;
    font-size: 26px;
    color: #fff;
  }
  h5 {
    margin-top: 40px;
  }
  h5 > a {
    font-size: 14px;
    color: #fff;
    text-decoration: none;
    font-weight: 400;
  }
}

.login-form {
  & input[type="email"],
  input[type="password"] {
    width: 100%;
    border: 1px solid #314d89;
    outline: none;
    padding: 12px 20px;
    color: #afafaf;
    font-weight: 400;
    font-family: "Lato", sans-serif;
    cursor: pointer;
  }

  & input[type="email"] {
    border-bottom: none;
    border-radius: 4px 4px 0 0;
    padding-bottom: 13px;
    box-shadow: 0 -1px 0 #e0e0e0 inset, 0 1px 2px rgba(0, 0, 0, 0.23) inset;
  }

  & input[type="password"] {
    border-top: none;
    border-radius: 0 0 4px 4px;
    box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.23) inset,
      0 1px 2px rgba(255, 255, 255, 0.1);
  }

  & input[type="submit"] {
    font-family: "Lato", sans-serif;
    font-weight: 400;
    background: linear-gradient(
      to bottom,
      rgba(224, 224, 224, 1) 0%,
      rgba(206, 206, 206, 1) 100%
    );
    display: block;
    margin: 20px auto 0 auto;
    width: 100%;
    border: none;
    border-radius: 3px;
    padding: 8px;
    font-size: 17px;
    color: #636363;
    text-shadow: 0 1px 0 rgba(255, 255, 255, 0.45);
    font-weight: 700;
    box-shadow: 0 1px 3px 1px rgba(0, 0, 0, 0.17),
      0 1px 0 rgba(255, 255, 255, 0.36) inset;

    &:hover {
      background: #ddd;
    }

    &:active {
      padding-top: 9px;
      padding-bottom: 7px;
      background: #c9c9c9;
    }
  }
}
</style>