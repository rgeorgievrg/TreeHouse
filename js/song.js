/**
 * Created by Rado on 27.9.2016 г..
 */
function Song(title,artist,duration)
{
    this.title = title;
    this.artist = artist;
    this.duration = duration;
    this.isPlaying = false;
}

Song.prototype.play = function(){
    this.isPlaying = true;
};

Song.prototype.stop = function(){
    this.isPlaying = false;
};

Song.prototype.toHTML = function(){

};