public function update(Request $request, $id)
    {
        $request->validate([
            'functionId'=>'required',
            'message'=>'required',
            'createdBy'=>'required'
        ]);

        $event = Contact::find($id);
        $event->functionId =  $request->get('functionId');
        $event->message = $request->get('message');
        $event->createdBy = $request->get('createdBy');
        $event->save();

        return redirect('/events')->with('success', 'Contact updated!');
    }
