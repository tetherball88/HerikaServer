<?php

$DRIVER="sql";

$PLAYER_NAME="Prisoner";
$HERIKA_NAME="Herika";

$PROMPT_HEAD="Let's roleplay in the Universe of Skyrim. I'm Prisoner.";
$HERIKA_PERS="You are Herika, a Breton female who likes jokes and sarcastic comments. You're Prisoner's companion.";

 
$TTS["AZURE"]["fixedMood"]="";
$TTS["AZURE"]["region"]="westeurope";			
$TTS["AZURE"]["voice"]="en-US-NancyNeural";	
$TTS["AZURE"]["volume"]="20";					
$TTS["AZURE"]["rate"]="1.25";					
$TTS["AZURE"]["countour"]="(11%, +15%) (60%, -23%) (80%, -34%)";							
$TTS["AZURE"]["validMoods"]=array("whispering","default");			
$TTS["AZURE"]["API_KEY"]="";

//$CORE_LANG="es";

$TTS["MIMIC3"]["URL"]="http://127.0.0.1:59125";   
$TTS["MIMIC3"]["voice"]="en_US/hifi-tts_low#92";
$TTS["MIMIC3"]["rate"]="1.3";
$TTS["MIMIC3"]["volume"]="60";

$TTS["ELEVEN_LABS"]["voice_id"]="EXAVITQu4vr4xnSDxMaL";	//https://api.elevenlabs.io/v1/voices
$TTS["ELEVEN_LABS"]["optimize_streaming_latency"]="0";
$TTS["ELEVEN_LABS"]["model_id"]="eleven_monolingual_v1";
$TTS["ELEVEN_LABS"]["stability"]="0.75";
$TTS["ELEVEN_LABS"]["similarity_boost"]="0.75";
$TTS["ELEVEN_LABS"]["API_KEY"]="";


$TTS["GCP"]["GCP_SA_FILEPATH"]="meta-chassis-391906-122bdf85aa6f.json";
$TTS["GCP"]["CONF"]='{"voice":{"name":"en-GB-Neural2-C","languageCode":"en-GB"},"ssml":{"rate":"1.15","pitch":"+3.6st"}}';

$STT["LOCALWHISPER"]["URL"]="http://127.0.0.1:3000/transcribe";

$STT["AZURE"]["LANG"]="en-US";
$STT["AZURE"]["API_KEY"]="";

$STT["WHISPER"]["LANG"]="en";
$STT["WHISPER"]["API_KEY"]="";



$STTFUNCTION="whisper";								// Valid options are azure or whisper so far
$TTSFUNCTION="none";								// Valid options are azure or mimic3, or 11labs so far


$CONTEXT_HISTORY="15";
$HTTP_TIMEOUT=15;                       // How long we will wait for openai response

//$CORE_LANG="es";

$FEATURES["MEMORY_EMBEDDING"]["ENABLED"]=false;
$FEATURES["MEMORY_EMBEDDING"]["CHROMADB_URL"]='http://127.0.0.1:8000';
$FEATURES["MEMORY_EMBEDDING"]["MEMORY_TIME_DELAY"]=10;
$FEATURES["MEMORY_EMBEDDING"]["MEMORY_CONTEXT_SIZE"]=1;

$FEATURES["COST_MONITOR_ENABLED"]=false;

$CONNECTORS=["koboldcpp","openai"];  

$CONNECTOR["openai"]["url"]="https://api.openai.com/v1/chat/completions";
$CONNECTOR["openai"]["model"]="gpt-3.5-turbo-0613";
$CONNECTOR["openai"]["max_tokens"]=100;
$CONNECTOR["openai"]["temperature"]=1;
$CONNECTOR["openai"]["presence_penalty"]=1;
$CONNECTOR["openai"]["API_KEY"]="";
$CONNECTOR["openai"]["MAX_TOKENS_MEMORY"]="512";

$CONNECTOR["koboldcpp"]["url"]="http://127.0.0.1:5001";
$CONNECTOR["koboldcpp"]["max_tokens"]=100;
$CONNECTOR["koboldcpp"]["temperature"]=0.9;
$CONNECTOR["koboldcpp"]["rep_pen"]=1.12;
$CONNECTOR["koboldcpp"]["top_p"]=0.9;
$CONNECTOR["koboldcpp"]["MAX_TOKENS_MEMORY"]=256;

$CONNECTOR["openrouter"]["url"]="https://openrouter.ai/api/v1/chat/completions";
$CONNECTOR["openrouter"]["model"]="meta-llama/llama-2-70b-chat";
$CONNECTOR["openrouter"]["max_tokens"]=100;
$CONNECTOR["openrouter"]["xreferer"]="http://localhost:8081/saig-gwserver/";
$CONNECTOR["openrouter"]["xtitle"]="Herika";
$CONNECTOR["openrouter"]["API_KEY"]="";
$CONNECTOR["openrouter"]["MAX_TOKENS_MEMORY"]="512";

$CONNECTOR["oobabooga"]["HOST"]="127.0.0.1";
$CONNECTOR["oobabooga"]["PORT"]="5005";
$CONNECTOR["oobabooga"]["MAX_TOKENS_MEMORY"]="512";
$CONNECTOR["oobabooga"]["max_tokens"]=100;
$CONNECTOR["oobabooga"]["temperature"]=0.7;
$CONNECTOR["oobabooga"]["rep_pen"]=1.18;


			
?>