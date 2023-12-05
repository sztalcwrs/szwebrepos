<script>
let list = [{
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
    {
        id: 1,
    },
]
let productList = document.querySelector('.product-list');

list.map((item) => {
    const temp = `
        <div class="product bg-mygrayfull">
            <div class="product-img flex justify-center p-5">
                <img src="{{asset('images/products/product01.png')}}" width="150" height="50" alt="">
            </div>
         
            <div class="product-details text-black bg-mygraylight mt-4 p-5">
                <div class="flex justify-between mt-4">
                    <h3 class="font-bold">Doxy Mart 50%</h3>
                    <h3 class="">Company Name</h3>
                </div>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, dolorum.</p>
                <a class="flex mt-4 font-light hover:text-mygray" href="">View Details ></a>
            </div>
        </div>
        `
    // productList.innerHTML += temp
})
</script>