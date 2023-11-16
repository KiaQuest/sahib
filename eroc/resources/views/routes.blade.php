<div>
    I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    or ...
     let's say ...
    HOW DO THIS BENEFIT MEEEE ....  \ ♥♦♣♠•
</div>

<a href="http://127.0.0.1:8000/create"><p>http://127.0.0.1:8000/create ***</p></a>
<a href="http://127.0.0.1:8000/table"><p>http://127.0.0.1:8000/table</p></a>
<a href="http://127.0.0.1:8000/myProducts"><p>http://127.0.0.1:8000/myProducts *****</p></a>
<a href="http://127.0.0.1:8000/products"><p>http://127.0.0.1:8000/products</p></a>
<a href="http://127.0.0.1:8000/products2"><p>http://127.0.0.1:8000/products2</p></a>
<a href="http://127.0.0.1:8000/update"><p>http://127.0.0.1:8000/update</p></a>
<a href="http://127.0.0.1:8000/update2"><p>http://127.0.0.1:8000/update2</p></a>
<a href="http://127.0.0.1:8000/routes"><p>http://127.0.0.1:8000/routes ****</p></a>


Route::get('/create', [test::class, 'test']);
Route::get('/table', [test::class, 'test2']);
//Route::get('/myProducts', [test::class, 'test2']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/myProducts', [ProductController::class, 'show'])->name('myproducts');
Route::get('/products2', [ProductController::class, 'create'])->name('create.product');
Route::get('/update', [ProductController::class, 'update'])->name('update.product');
Route::get('/update2', [ProductController::class, 'store'])->name('update.product.do');
Route::get('/routes', [ProductController::class, 'routes'])->name('update.product.do');

