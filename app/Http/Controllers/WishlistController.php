<?php

namespace App\Http\Controllers;

use App\Models\wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = DB::table('wishlists')
            ->join('products', 'wishlists.product_id','=','products.id')
            ->select('products.*', 'wishlists.*')
            ->where('team_id', '=', auth()->user()->currentTeam->id)
            ->get();
        // $products= wishlist::select('*')->where('team_id', '=', auth()->user()->currentTeam->id)->get();

        return view('currentTeamWishlist', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *li
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $product_id, $team_id)
    {
        wishlist::create([
            'team_id'=>$team_id,
            'product_id'=>$product_id,
            'user_id'=>auth()->user()->id
        ]);


        return back()
            ->with('success', 'Details Uploaded successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function show(wishlist $wishlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function edit(wishlist $wishlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wishlist $wishlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wishlist  $wishlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(wishlist $wishlist)
    {
        //
    }
}
