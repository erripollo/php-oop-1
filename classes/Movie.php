<?php 

    class Movie
    {
        public $title;
        public $language;
        public $overview;
        public $relaseDate;


        /**
         * Movie function
         *
         * @param strin $title
         * @param string $language
         * @param string $overview
         * @param string $relaseDate
         */
        function __construct(strin $title, string $language, string $overview, string $relaseDate)
        {
            $this->title = $title;
            $this->language = $language;
            $this->overview = $overview;
            $this->relaseDate = $relaseDate;
        }
    }

?>