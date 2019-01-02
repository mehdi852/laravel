<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Categorie;
use App\Match;
use Spatie\Sitemap\SitemapGenerator;

class AppController extends Controller
{


     /**
     * Show the Homepage 
     *
     *
     * @return View
     */
    public function home()
    {
        return view('partials.home');
    }
    /**
     * Show the tips Page .
     *
     *
     * @return View
     */
    public function tips()
    {
        $Categories = Categorie::all();
        return view('partials.tips',["Categories"=>$Categories]);
    }
      /**
     * Show the tips Page .
     *
     *
     * @return View
     */
    public function match()
    {
        
        return view('partials.match');
    }
      /**
     * Show the Category Page .
     *
     *
     * @return View
     */
    public function category()
    {
        return view('partials.admin.addcategory');
    }
      /**
     * Show the addmatch  Page .
     *
     *
     * @return View
     */
    public function addmatchpage()
    {
        return view('partials.admin.addmatch');
    }

    
    /**
     * Show Spain Matches .
     *
     *
     * @return View
     */
    public function tipsSpain()
    {

        $matches =  Match::where('category', 'Liga BBVA')->get();;
        $Categories =  Categorie::all();
        return view('partials.tips',["Matches"=>$matches , "Categories"=>$Categories]);
    }

     /**
     * Show Uk Matches .
     *
     *
     * @return View
     */
    public function tipsuk()
    {

        $matches =  Match::where('category', 'Premier League')->get();;
        $Categories =  Categorie::all();
        return view('partials.tips',["Matches"=>$matches , "Categories"=>$Categories]);
    }

    
     /**
     * Show Holland Matches .
     *
     *
     * @return View
     */
    public function tipsholland()
    {

        $matches =  Match::where('category', 'Erdevesie')->get();;
        $Categories =  Categorie::all();
        return view('partials.tips',["Matches"=>$matches , "Categories"=>$Categories]);
    }

      /**
     * Show Holland Matches .
     *
     *
     * @return View
     */
    public function tipsfrance()
    {

        $matches =  Match::where('category', 'Ligue 1')->get();;
        $Categories =  Categorie::all();
        return view('partials.tips',["Matches"=>$matches , "Categories"=>$Categories]);
    }



/**
     * Show stats per match .
     *
     *
     * @return View
     */
    public function matchstats($home,$away,$id)
    {
        $matchtitle = "| ".str_replace('-',' ',$home)." vs ".str_replace('-',' ',$away);
        $match =  Match::where('id', $id)->first();
        $Categories =  Categorie::all();
        return view('partials.match',["Match"=>$match , "Categories"=>$Categories,"MatchTitle"=>$matchtitle]);
    }



    /**
     * add the Category Page .
     *@param  Request  $request
     *
     * @return View
     */
    public function addcategory(Request $request)
    {
       $category = new Categorie;
       $category->name = $request->input('leaguename');
       $category->country = $request->input('country');
       $category->save();
        return view('partials.admin.addcategory');
    }

     /**
     * add the Category Page .
     *@param  Request  $request
     *
     * @return View
     */
    public function addmatch(Request $request)
    {
        $match = new Match;


        $match->hometeam = $request->input('hometeam');
        $match->homeposession = $request->input('homeposession');
        $match->homepercent = $request->input('homepercent');
        $match->homerank = $request->input('homerank');
        $match->homepoints = $request->input('homepoints');
        $match->homeattack = $request->input('homeattack');
        $match->homedefence = $request->input('homedefence');
        $match->homelastgames = $request->input('homelastgames');
        $match->homegoals = $request->input('homegoals');
        $match->homeAvgPossesion = $request->input('homeAvgPossesion');
        $match->homePassAccuracy = $request->input('homePassAccuracy');


        $match->awayteam = $request->input('awayteam');
        $match->awayposession = $request->input('awayposession');
        $match->awaypercent = $request->input('awaypercent');
        $match->awayrank = $request->input('awayrank');
        $match->awaypoints = $request->input('awaypoints');
        $match->awayattack = $request->input('awayattack');
        $match->awaydefence = $request->input('awaydefence');
        $match->awaylastgames = $request->input('awaylastgames');
        $match->awaygoals = $request->input('awaygoals');
        $match->awayAvgPossesion = $request->input('awayAvgPossesion');
        $match->awayPassAccuracy = $request->input('awayPassAccuracy');



        $match->generaltips = $request->input('generaltips');
        $match->category = $request->input('category');
        $match->risk = $request->input('risk');

        $match->save();
      
     
         return view('partials.admin.addmatch');
    }
}
