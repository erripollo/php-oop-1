<?php 


    /**
     * Movie class
     * @author Enrico <email@email.com>
     * @copyright 2021 Enrico
     */
    class Movie
    {
        public $image;
        public $title;
        public $language;
        public $overview;
        public $releaseDate;
        public $vote;


        /**
         * Movie function
         *
         * @param string $image
         * @param string $title
         * @param string $language
         * @param string $overview
         * @param string $releaseDate
         * @param int $vote
         */
        function __construct(string $image, string $title, string $language, string $overview, string $releaseDate, int $vote)
        {
            $this->image = $image;
            $this->title = $title;
            $this->language = $language;
            $this->overview = $overview;
            $this->releaseDate = $releaseDate;
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