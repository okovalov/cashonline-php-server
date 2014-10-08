<?php

class AccountsController extends \BaseController
{

    /**
     * Display a listing of posts
     *
     * @return Response
     */
    public function index()
    {
        return 'accounts.index';
    }

    /**
     * Show the form for creating a new post
     *
     * @return Response
     */
    public function create()
    {
        return 'accounts.create';
    }

    /**
     * Store a newly created post in storage.
     *
     * @return Response
     */
    public function store()
    {
        return 'accounts.store';
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return 'accounts.edit';
    }

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return 'accounts.show';
    }

    /**
     * Update the specified post in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        return 'accounts.update';
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        return 'accounts.destroy';
    }
}
