# Laravel Broadcast Streaming (One to Many)

A robust, one-to-many live streaming application built with Laravel, featuring WebRTC and Socket.io for real-time broadcast streaming to multiple viewers.

## Installation

#### Install Package

```
  composer require dreamersdesire/laravel-live-streaming
```

#### Publish vendor

```
  php artisan vendor:publish --tag=live-streaming --force
```

#### Add Some Routes (`web.php`)

```
  Route::get('/stream', [StreamController::class, 'createStream'])->name('stream.create');
  Route::get('/stream/screenshare', [StreamController::class, 'createScreenShareStream'])->name('stream.screenshare.create');
  Route::get('/stream/{stream_id}', [StreamController::class, 'watchStream'])->name('stream.watch');
```

#### Install `npm` dependencies

```
  npm install socket.io
  npm install webrtc-adapter
  npm install wrtc
```

## Usage

#### Run Laravel Server

Run your laravel server at port `8000` (default)

```
  php artisan serve
```

#### Run node server

Run node server (server.js). It will automatically run from `6001` port

```
  node server.js
```

#### Additional Config (Optional)

If you'd like to share your local project over your network, then change socket url from `.env` file.
For LAN, replace with your ip and socket port must be `6001`

```
  APP_SOCKET_URL=http://192.168.x.x:6001
```

That's it. now in browser, open laravel application and see what happens.

## Author

- [@jahid404](https://www.github.com/jahid404)

## License

[![MIT License](https://img.shields.io/badge/License-MIT-green.svg)](https://raw.githubusercontent.com/jahid404/EasyBreezyBlogs/main/LICENSE)

## Features

- **Streaming:**

  - Broadcast live video to multiple viewers with low latency, ensuring a smooth and engaging experience for audiences.

- **Screen Sharing:**

  - Share your screen in real-time during broadcasts, making it ideal for presentations, tutorials, or collaborative work.

- **Stream Record & Download:**

  - Record live streams as they happen and provide download options, allowing streamers & viewers to access sessions on demand.
  - Stream will be automatically record while streamer start broadcast.

- **Video on/off:**

  - Enable or disable video during the stream, allowing flexibility for streamers who may need to switch between video and audio-only modes.

- **Mic on/off:**
  - Toggle the microphone on or off as needed during the stream, providing control over audio input for smoother communication.

## 🤓 About Me

I'm a web developer with a focus on Laravel. My expertise lies in developing robust web applications, and I've actively contributed to various PHP-Laravel projects in the past. With a passion for problem-solving and a keen interest in crafting elegant solutions, I enjoy the challenges that web development brings.

If you're interested in connecting, discussing web development, or exploring potential collaborations, feel free to reach out. I'm open to new opportunities and always excited about creating innovative projects.

Let's build something amazing together!

## Support

If you have any feedback, please reach out to me at jsjahidmini@gmail.com

## Screenshots

**Stream page with screen sharing**

![App Screenshot](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjN0uepg2UsjdTXX3TauSBcihBzAbnltIlF6DOGaeDMCEysjpe6qwbktPpBEqxCkcIflFlFnm_4hJCCk3mdec4eBxMvUViGjnhPiefpQ2OJF8h_kBeI2nj5hQPELYD7Gz12_TkFeE6ihgh5ra-GUiBgDVxNAUO_ArsbPOl7QL0sTWfEZy5Nvboq_7S7_VY)

**Viewer page**

![App Screenshot](https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEi5_OVzjNT7PpKp257bBqjvcvgzGe_SAzIhO6s4UoQ8hBzTvW1Moz5yoeHnkhYeS6_kyVaEIpVHbrjF3uEaKzdpLQ-rnkrK834qElYPE2wyk0joQygtium0xbdZxb4K5nmyhysEGeOaLeqvtmHx2ZyJ243YNrKXNZfAxfavnqCTyDPH7jqwOGAw_MiMrPw)
