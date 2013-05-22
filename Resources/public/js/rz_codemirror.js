jQuery(document).ready(function() {
    rz_codemirror_obj.watchTabbableEvents();
});

var rz_codemirror = {
    cm_instance:  new Array(),
    init: function(){
        return this;
    },

    register:function(id, el, settings) {
        var cm = CodeMirror.fromTextArea(el, settings);
        var container = '#'+jQuery(el).closest('.tab-pane').attr('id');
        rz_codemirror.cm_instance.push({'cm': cm, 'container': container});
    },

    watchTabbableEvents: function() {
        jQuery('a[data-toggle="tab"]').on('shown', function (e) {
//            console.log(rz_codemirror.parent);
            console.log(jQuery(e.target).attr('href'));

            var current = jQuery(e.target).attr('href');
            jQuery.each(rz_codemirror.cm_instance, function(key, value) {
                if (jQuery.inArray(current, value.container)) {
                    value.cm.refresh();
                }
            });
        })
    }
}

var rz_codemirror_obj = rz_codemirror.init();
