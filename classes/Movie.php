<?php 


    /**
     * Movie class
     * @author Enrico <email@email.com>
     * @copyright 2021 Enrico
     */
    class Movie
    {
        public $title;
        public $language;
        public $overview;
        public $relaseDate;
        public $vote;


        /**
         * Movie function
         *
         * @param strin $title
         * @param string $language
         * @param string $overview
         * @param string $relaseDate
         * @param 
         */
        function __construct(string $title, string $language, string $overview, string $relaseDate, int $vote)
        {
            $this->title = $title;
            $this->language = $language;
            $this->overview = $overview;
            $this->relaseDate = $relaseDate;
            $this->vote = $vote;
        }

        /**
         * ## getVote
         * get movie vote
         *
         * @return void $vote Movie vote
         */
        public function getVote()
        {
            return $this->vote;
        }


        /**
         * ## setVote
         * set movie vote
         *
         * @param integer $vote
         * @return void
         */
        public function setVote(int $vote)
        {
            $this->vote = $vote;
        }
    }

?>