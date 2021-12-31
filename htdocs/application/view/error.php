<body>
    <h1>Sorry, Error just Occured</h1>
    <h1><?php $this->errorMSG?></h1>
    <form method='post'>
        <input type='text' />
        <input type='password'/>
        <button type='submit'>Login</button>
    </form>
    <button onclick="history.back()">Back</button>
    <button onclick="location.href='/'">Home</button>

