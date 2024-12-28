<div>
    <h1>Add Email Details</h1>
    <form action="send-email" method="post">
        @csrf
        <input type="text" name="to" placeholder="Enter Email Address" />
        <br />
        <br />
        <input type="text" name="subject" placeholder="Enter Email Subject" />
        <br />
        <br />

        <textarea type="text" name="message" placeholder="Enter Email Message"></textarea/>
        <br />
        <br />
        <button>Send Email</button>


    </form>
</div>
