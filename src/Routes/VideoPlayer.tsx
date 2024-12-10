import React, { useState } from "react";
import ReactPlayer from "react-player";

import { Link, Route, Routes } from "react-router-dom";

const VideoPlayer: React.FC = () => {
  const [isReady, setIsReady] = useState(true);

  const handleReady = () => {
    setIsReady(true);
    
  };    

  return (
    <ReactPlayer
      className=" aspect-video"
      url="https://youtu.be/RUUTVOfotT8?si=I8oeqVY-9Rtz8YNW"
      controls
      playing={true}
      volume={0.350}
      fullscreen={isReady}
      loop={true}
      onReady={handleReady}
      screenshot={isReady}
      
    />

  );
};

export default VideoPlayer;