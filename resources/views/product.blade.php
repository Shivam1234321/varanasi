<form action="pay" method="post">
    @csrf
    <input type="hidden" name="amount" value="100">
    <button>Pay Now</button>
</form>
