@extends('instructor.layouts.app')

@section('content')
 <!-- BEGIN: General Report -->
 <div class="col-span-12 mt-8">
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            Add Acourse
        </h2>
    </div>

    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 lg:col-span-10">
            <!-- BEGIN: Input -->
            <div class="intro-y box">
                <div class="flex flex-col sm:flex-row items-center p-5 border-b border-gray-200">
                    <h2 class="font-medium text-base mr-auto">
                        Input
                    </h2>
                </div>
                <div class="p-5" id="input">
                    <div class="preview">
                        <div>
                            <label>Input Text</label>
                            <input type="text" class="input w-full border mt-2" placeholder="Input text">
                        </div>
                        <div class="mt-3">
                            <label>Rounded</label>
                            <input type="text" class="input w-full rounded-full border mt-2" placeholder="Rounded">
                        </div>
                        <div class="mt-3">
                            <label>With Help</label>
                            <input type="text" class="input w-full border mt-2" placeholder="With help">
                            <div class="text-xs text-gray-600 mt-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
                        </div>
                        <div class="mt-3">
                            <label>Password</label>
                            <input type="password" class="input w-full border mt-2" placeholder="Password">
                        </div>
                        <div class="mt-3">
                            <label>Disabled</label>
                            <form method="post"> <textarea class="summernote" name="editor" placeholder="j"></textarea> </form>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-input" class="copy-code button button--sm border flex items-center text-gray-700"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy code </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-input"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdivHTMLCloseTag HTMLOpenTaglabelHTMLCloseTagInput TextHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Input text&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagRoundedHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full rounded-full border mt-2&quot; placeholder=&quot;Rounded&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagWith HelpHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;With help&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;text-xs text-gray-600 mt-2&quot;HTMLCloseTagLorem Ipsum is simply dummy text of the printing and typesetting industry.HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagPasswordHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;password&quot; class=&quot;input w-full border mt-2&quot; placeholder=&quot;Password&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;mt-3&quot;HTMLCloseTag HTMLOpenTaglabelHTMLCloseTagDisabledHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; class=&quot;input w-full border mt-2 bg-gray-100 cursor-not-allowed&quot; placeholder=&quot;Disabled&quot; disabledHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- END: General Report -->

@endsection
