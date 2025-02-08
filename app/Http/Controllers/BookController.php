<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view("index",compact("books"));

    }
    public function create(){
        return view('create');

    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
       /* if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('books', 'public');
        }*/
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '_library.' . $extension;
            $image->move(public_path('image'), $filename); 
        }

        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
       // $image = $request->image;
        $image = $filename;

        $data=[
            'name'=> $name,
            'description'=> $description,
            'price'=> $price,
           'image' => $filename,
        ];
       // dd("you are in suc")
        Book::create($data);
        return redirect('books/index')->with('success','You created a new book');
       //  echo " You created a new book";
        
    }
    public function update($id){
        $book = Book::find($id);
        return view('update',compact('book'));  
}
public function execute(Request $request){

    $request->validate([
        'id' => 'required|exists:books,id',
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // 
    $book = Book::find($request->id);

   // $book = Book::find($request->book_id);
    
  // $book = Book::find($request->id);
   // dd($request->all());
    //dd($book);
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename = time() . '_library.' . $extension;
        $image->move(public_path('image'), $filename); 
    }
   
    $book->update([
        'name' => $request->name,
        'description' => $request->description,
        'price' => $request->price,
        'image'=> $filename
        
        
    ]);

    return redirect('books/index')->with('success', '');
}
public function destroy($id)
{
    $book = Book::find($id);
    $book->delete();

    
    return redirect('books/index')->with('success', '');
}


}





